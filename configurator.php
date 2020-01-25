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
							Połączenie z bazą danych
						</h1>
						<div style="margin:10px;">
							Wprowadź nazwę użytkownika bazy danych
							<br />
							przykładowo 
							<i>
								root
							</i>
							<br />
							<input style="width:300px;margin:10px;" type="text" name="nazwa_uzytkownika_bazy_danych">
						</div>
						<div style="margin:10px;">
							Wprowadź hasło użytkownika bazy danych
							<br />
							(gdy brak nic nie wpisuj, zostaw puste pole)
							<br />
							<input style="width:300px;margin:10px;" type="password" name="haslo_uzytkownika_bazy_danych">
						</div>
						<div style="margin:10px;">
							Wprowadź nazwę bazy danych
							<br />
							<input style="width:300px;margin:10px;" type="text" name="nazwa_bazy_danych">
						</div>
						<div style="margin:10px;">
							Wprowadź host bazy danych
							<br />
							<input style="width:300px;margin:10px;" type="text" name="host_bazy_danych">
						</div>
						<div align="center">
							<button style="display:block;font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="konfigurator" value="pzbdikd">
								POŁĄCZ Z BAZĄ DANYCH I KONFIGURUJ DALEJ
							</button>
							<button style="font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="konfigurator" value="pikd">
								POMIŃ I KONFIGURUJ DALEJ
							</button>
						</div>
					</form>
				</div>	
			</body>
			<footer style="position:absolute;bottom:1px;right:1px;font-size:10px;font-family:Montserrat,sans-serif;">
				Konfigurator PACANOSIU BETA 2020.01
			</footer>
		</html>'
	;
?>
