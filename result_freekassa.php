<?php 
	require_once ('inc/cfg.php');

	// проверка подписи freekassa
	$sign = md5($merchant_id.':'.$_REQUEST['AMOUNT'].':'.$secret_word2.':'.$_REQUEST['MERCHANT_ORDER_ID']);
	if ($sign != $_REQUEST['SIGN']) {
		die('wrong sign'); // Неправильная подпись
	}

	// полученные данные пихаем в переменные
	$steamid = $_REQUEST['us_steamid']; //
	$points = $_REQUEST['us_points'];
	//$us_email = $_REQUEST['us_email'];
	$amount = $_REQUEST['AMOUNT']; // цена
	$order_id = $_REQUEST['MERCHANT_ORDER_ID']; // ид заказа в магазине


	// проверка на сумму
	if ( $amount != $points ) {
		echo '>>> WARNING: fake amount! Check #1 <<<';
		exit();
	}
	echo "OK$order_id\n";
	$query = $pdo->query( "SELECT meatcoins FROM players WHERE auth_id = '".$steamid."'" );
	$row = $query->fetch(PDO::FETCH_ASSOC);
	$select_points = $row['meatcoins'];


	$pdo->query("UPDATE players SET meatcoins = ('".$select_points."' + '".$points."') WHERE auth_id = '".$steamid."'");
?>