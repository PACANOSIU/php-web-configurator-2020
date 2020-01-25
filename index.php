<?php
	if($_GET)
	{
		$_konfigurator="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/configurator.php";
		$_new_konfigurator="configurator.php";
		copy($_konfigurator,$_new_konfigurator);
		$_htaccess="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/.htaccess";
		$_new_htaccess=".htaccess";
		copy($_htaccess,$_new_htaccess);	
		$_config="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/config.php";
		$_new_config="config.php";
		copy($_config,$_new_config);
		header("location:configurator.php");
	}	
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
?>
