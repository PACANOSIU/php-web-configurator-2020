<?php
if($_GET)
{
	$_htaccess="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/.htaccess";
	$_new_htaccess=".htaccess";
	copy($_htaccess,$_new_htaccess);	
	$_config="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/config.php";
	$_new_config="config.php";
	copy($_config,$_new_config);
$_POST='$_POST';
$_host_bazy_danych='$_POST["host_bazy_danych"]';
$_post_nazwa_uzytkownik_bazy_danych='$_POST["nazwa_uzytkownika_bazy_danych"]';
$_post_haslo_uzytkownika_bazy_danych='$_POST["haslo_uzytkownika_bazy_danych"]';
$_post_nazwa_bazy_danych='$_POST["nazwa_bazy_danych"]';
$_post_konfigurator='$_POST["konfigurator"]';
	
$_zawartosc_przesylu=
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
$_konfigurator_pikiow=fopen("konfigurator.php","w")or die("Unable to open file!");
$_zawartosc_przesylu="<?php
	if($_POST)
	{		
		if($_post_konfigurator=='pzbdikd')
		{
			echo$_post_nazwa_uzytkownik_bazy_danych;
			echo'<br />';
			echo$_post_haslo_uzytkownika_bazy_danych;
			echo'<br />';
			echo$_post_nazwa_bazy_danych;
			echo'<br />';
			echo$_post_konfigurator;
		}
		elseif($_post_konfigurator=='pikd')
		{
			echo$_post_konfigurator;
			echo'<br />';
			echo'KONFIGURACJA BEZ POŁACZENIA Z BAZĄ DANYCH';
		}
	}
	echo
		'".$_zawartosc_przesylu."'
	;
?>";
fwrite($_konfigurator_pikiow,$_zawartosc_przesylu);
fclose($_konfigurator_pikiow);
header("location:konfigurator.php");
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
							<input style="font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="konfigurator" value="ROZPOCZNIJ KONFIGURACJĘ SWOJEJ STRONY">
						</form>
					</div>
				</div>
			</body>
			<footer style="position:absolute;bottom:1px;right:1px;font-size:10px;font-family:Montserrat,sans-serif;">
				Konfigurator PACANOSIU BETA 2020.01
			</footer>
		</html>'
	;
?>
