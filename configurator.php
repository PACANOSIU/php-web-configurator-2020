<?php
	if($_POST)
	{		
		if($_POST["konfigurator"]=='pzbdikd')
		{
			echo$_POST["nazwa_uzytkownika_bazy_danych"];
			echo'<br />';
			echo$_POST["haslo_uzytkownika_bazy_danych"];
			echo'<br />';
			echo$_POST["nazwa_bazy_danych"];
			echo'<br />';
			echo$_POST["konfigurator"];
		}
		elseif($_POST["konfigurator"]=='pikd')
		{
			echo$_POST["konfigurator"];
			echo'<br />';
			echo'KONFIGURACJA BEZ POŁACZENIA Z BAZĄ DANYCH';
		}
	}
	echo
		'<!DOCTYPE html>
		<html>
			<head>
				<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
			</head>
			<body>
				<div style="text-align:center;font-family:Montserrat,sans-serif;">
					<form method="POST">
						<h1>
							Database connection
						</h1>
						<div style="margin:10px;">
							Enter the database username
							<br />
							for example 
							<i>
								root
							</i>
							<br />
							<input style="width:300px;margin:10px;" type="text" name="nazwa_uzytkownika_bazy_danych">
						</div>
						<div style="margin:10px;">
							Enter the database user password
							<br />
							(in the absence of not anything not write, leave blank)
							<br />
							<input style="width:300px;margin:10px;" type="password" name="haslo_uzytkownika_bazy_danych">
						</div>
						<div style="margin:10px;">
							Enter the database name
							<br />
							<input style="width:300px;margin:10px;" type="text" name="nazwa_bazy_danych">
						</div>
						<div style="margin:10px;">
							Enter the database host
							<br />
							<input style="width:300px;margin:10px;" type="text" name="host_bazy_danych">
						</div>
						<div align="center">
							<button style="display:block;font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="konfigurator" value="pzbdikd">
								CONNECT WITH DATABASE AND CONFIGURE NEXT
							</button>
							<button style="font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="konfigurator" value="pikd">
								SKIP AND CONFIGURE NEXT
							</button>
						</div>
					</form>
				</div>	
			</body>
			<footer style="position:absolute;bottom:1px;right:1px;font-size:10px;font-family:Montserrat,sans-serif;">
				Configurator PACANOSIU BETA 2020.01
			</footer>
		</html>'
	;
?>
