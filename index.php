<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<title>Buy points</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/64ff6e1601.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="style/styles.css">
	<!-- PHP Includes -->
	<?php require_once ('inc/cfg.php');?>

	<script src="inc/check_form/script.js"></script>

</head>

<body>
	<div class="container bg-dark text-light" style="max-width: 600px;">
		<div class="content">
			<h4 class="text-center">Buy points</h4>
			<hr>
			<div class="row">
				<div class="col-sm-12">			
					<form role="form" action="pay.php" method="POST" autocomplete="off">
						<div class="form-group">
							<label>SteamID</label>
							<input type="text" id="steamid" name="steamid" placeholder="Ваш SteamID, напишите ник чтобы узнать SteamID" class="form-control form-control-sm" maxlength="32" required>
							<small class="text-form text-muted">Вписывать только SteamID</small>
							<div id="status"></div>
						</div>
						<div class="form-group">
							<label for="points">Поинты</label>
							<input type="text" id="points" name="points" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control form-control-sm" placeholder="Введите кол-во поинтов" maxlength="32" required>
						</div>
						<div class="form-group" style="display: none;">
							<label>Способ оплаты</label>
							<select id="how" name="how" class="form-control form-control-sm" required>
								<?=$use_freekassa;?>
							</select>
						</div>
						<input class="btn btn-lg btn-block btn-info" type="submit" value="Оплатить" name="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>