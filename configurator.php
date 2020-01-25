<?php
	//Copyright PACANOSIU Development productions :D
	$_error_nazwa_uzytkownika_bazy_danych=NULL;
	$_error_nazwa_bazy_danych=NULL;
	$_error_host_bazy_danych=NULL;
	if($_POST)
	{	
		if($_POST["konfigurator"]=='pzbdikd')
		{
			$_ERROR=FALSE;
			if($_POST["nazwa_uzytkownika_bazy_danych"]=='')
			{
				$_error_nazwa_uzytkownika_bazy_danych=
					'color:rgb(255,0,0);'
				;
				$_ERROR=TRUE;
			}
			if($_POST["nazwa_bazy_danych"]=='')
			{
				$_error_nazwa_bazy_danych=
					'color:rgb(255,0,0);'
				;
				$_ERROR=TRUE;
			}
			if($_POST["host_bazy_danych"]=='')
			{
				$_error_host_bazy_danych=
					'color:rgb(255,0,0);'
				;
				$_ERROR=TRUE;
			}
			if(($_ERROR==FALSE)&&($_ERROR!=TRUE))
			{
				$_kreator_plikow=fopen("DB/db_".$_POST["nazwa_bazy_danych"].".php","w")or die("Unable to open file!");
		$_zawartosc_pliku_db=
	'$db_host = "'.$_POST["host_bazy_danych"].'";
	$db_user_name = "'.$_POST["nazwa_uzytkownika_bazy_danych"].'";
	$db_user_password = "'.$_POST["haslo_uzytkownika_bazy_danych"].'";
	$db_name = "'.$_POST["nazwa_bazy_danych"].'";
	$db_connect = @new mysqli($db_host, $db_user_name, $db_user_password, $db_name);'
				;
			$_zawartosc_kreowanego_pliku="<?php
	$_zawartosc_pliku_db
?>";
			fwrite($_kreator_plikow,$_zawartosc_kreowanego_pliku);
			fclose($_kreator_plikow);
			}
		}
		elseif($_POST["konfigurator"]=='pikd')
		{
			$_db="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/DB/db.php";
			$_new_db="DB/db.php";
			copy($_db,$_new_db);
		}
		
		$_HDcss="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CSS/HDstyle.css";
		$_new_HDcss="CSS/HDstyle.css";
		copy($_HDcss,$_new_HDcss);
		
		$_ExtensionController="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/Managers/ExtensionController.class.php";
		$_new_ExtensionController="CLASS/Managers/ExtensionController.class.php";
		copy($_ExtensionController,$_new_ExtensionController);
		
		$_WebBars="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebBars.class.php";
		$_new_WebBars="CLASS/WebBars.class.php";
		copy($_WebBars,$_new_WebBars);
		$_WebFooter="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebFooter.class.php";
		$_new_WebFooter="CLASS/WebFooter.class.php";
		copy($_WebFooter,$_new_WebFooter);
		$_WebHead="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebHead.class.php";
		$_new_WebHead="CLASS/WebHead.class.php";
		copy($_WebHead,$_new_WebHead);
		$_WebHeader="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebHeader.class.php";
		$_new_WebHeader="CLASS/WebHeader.class.php";
		copy($_WebHeader,$_new_WebHeader);
		$_WebIndex="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebIndex.class.php";
		$_new_WebIndex="CLASS/WebIndex.class.php";
		copy($_WebIndex,$_new_WebIndex);
		$_WebLegs="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebLegs.class.php";
		$_new_WebLegs="CLASS/WebLegs.class.php";
		copy($_WebLegs,$_new_WebLegs);
		$_WebReklamaHeader="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebReklamaHeader.class.php";
		$_new_WebReklamaHeader="CLASS/WebReklamaHeader.class.php";
		copy($_WebReklamaHeader,$_new_WebReklamaHeader);
		$_WebWritePole="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebWritePole.class.php";
		$_new_WebWritePole="CLASS/WebWritePole.class.php";
		copy($_WebWritePole,$_new_WebWritePole);
		$_WebWritePoleMenuTop="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/CLASS/WebWritePoleMenuTop.class.php";
		$_new_WebWritePoleMenuTop="CLASS/WebWritePoleMenuTop.class.php";
		copy($_WebWritePoleMenuTop,$_new_WebWritePoleMenuTop);
		
		$_kreator_plikow=fopen("index.php","w")or die("Unable to open file!");
		$_przepisanie_indexu=
			'<?php
		session_start();
		require_once("config.php");
		if(!isset($_GET["page"])) 
		{
			WebIndex::load("IndexIndex");   
		} 
		else 
		{    
			$mp = new ExtensionController($_GET["page"]);    
		}
?>'
		;
		fwrite($_kreator_plikow,$_przepisanie_indexu);
		fclose($_kreator_plikow);
		unlink("configurator.php");
		header("location:/");
		
	}
	echo
		'<!DOCTYPE html>
		<html>
			<head>
				<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
			</head>
			<body>
				<div style="text-align:center;font-family:Montserrat,sans-serif;">
					<form method="POST" action="">
						<h1>
							Database connection
						</h1>
						<div style="margin:10px;'.$_error_nazwa_uzytkownika_bazy_danych.'">
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
						<div style="margin:10px;'.$_error_nazwa_bazy_danych.'">
							Enter the database name
							<br />
							(for example: 
							<i>
								database_1
							</i>)
							<br />
							<input style="width:300px;margin:10px;" type="text" name="nazwa_bazy_danych">
						</div>
						<div style="margin:10px;'.$_error_host_bazy_danych.'">
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
						<div>
							no worries, you will be able to connect to the database later
						</div>
					</form>
				</div>	
			</body>
			<footer style="position:absolute;bottom:1px;right:1px;font-size:10px;font-family:Montserrat,sans-serif;">
				Web Configurator PACANOSIU BETA 2020.01
			</footer>
		</html>'
	;
?>
