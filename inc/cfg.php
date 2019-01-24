<?php
	require_once 'database.php';

	# настройки
	$url = 'https://csonelove.ru/test2/csgo/'; # url до скрипта. слеш в конце важен!

    # настройка freekassa
	$freekassa_on = '1'; # включить сервис
	$merchant_id = ''; # ид вашего магазина
	$secret_word1 = ''; # секретное слово №1 / пароль 1
	$secret_word2 = ''; # секретное слово №2 / пароль 2

	$use_freekassa = ( $freekassa_on == 1 ) ? '<option value="1">Freekassa (QIWI, ЯД, VISA ...)</option>' : '';
?>