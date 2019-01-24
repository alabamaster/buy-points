<?php 
	require_once 'inc/cfg.php';

	$steamid = trim($_POST['steamid']);
	$howbuy = trim($_POST['how']);
	$points = trim($_POST['points']);
	$id_acc = rand(999, 999999);
	$order_amount = $_POST['points'];

	echo '
	<html> 
	<head>
		<title>Переадресация на сайт платёжной системы...</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="Content-Language" content="ru">
		<meta http-equiv="Pragma" content="no-cache">
		<meta name="robots" content="noindex,nofollow">
	</head>
	<body onload="setTimeout(function() { document.form1337.submit() }, 1000)">';
		if ( $howbuy == 1 && $freekassa_on == 1 ){
			$sign = md5($merchant_id.':'.$order_amount.':'.$secret_word1.':'.$id_acc);
			echo '<center><h3>Переадресация на сайт платёжной системы...</h3></center><br>
			<form action="http://www.free-kassa.ru/merchant/cash.php" method="GET" name="form1337">
				<input type="hidden" name="s" value="'.$sign.'">
		        <input type="hidden" name="o" value="'.$id_acc.'">
		        <input type="hidden" name="m" value="'.$merchant_id.'">
		        <input type="hidden" name="oa" value="'.$order_amount.'">
				<input type="hidden" name="us_points" value="'.$points.'">
				<input type="hidden" name="us_steamid" value="'.$steamid.'">
			</form>';
		} else {
			header("Location: ".$url."");
			exit();
		}
		echo '
	</body>
	</html>';
?>