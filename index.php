<?php
	//Copyright PACANOSIU Development productions :D
	unset($_SESSION)
	session_start();
	if($_GET)
	{
		$_konfigurator="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/configurator.php";
		$_new_konfigurator="configurator.php";
		copy($_konfigurator,$_new_konfigurator);		
		header("location:configurator.php");
	}
	else
	{
		echo
			'<!DOCTYPE html>
			<html>
				<head>
					<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
				</head>
				<body>
					<div style="text-align:center;font-family:Montserrat,sans-serif;">
						<div>
							Welcome to the "PACANOSIU" website configurator
							<br />
							Thank you for your interest in my product.
							<br />
							To be up to date <a href="">SUBSCRIBE</a>.
							<br />
							<form method="GET">
								<input style="font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="konfigurator" value="START CONFIGURING YOUR WEBSITE">
							</form>
						</div>
					</div>
				</body>
				<footer style="position:absolute;bottom:1px;right:1px;font-size:10px;font-family:Montserrat,sans-serif;">
					Configurator PACANOSIU BETA 2020.01
				</footer>
			</html>'
		;
	}
?>
