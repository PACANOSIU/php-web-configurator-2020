<?php	
	session_start();
	//Copyright PACANOSIU Development productions :D
	$_error_nazwa_uzytkownika_bazy_danych=NULL;
	$_error_nazwa_bazy_danych=NULL;
	$_error_host_bazy_danych=NULL;	
	
	
	




	if(isset($_POST["db_konfigurator"]))
	{
		
		if($_POST["db_konfigurator"]=='pzbdikd')
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
				$_SESSION["db_konfigurator"]=$_POST["db_konfigurator"];
			}
		}
		elseif($_POST["db_konfigurator"]=='pikd')
		{
			$_SESSION["db_konfigurator"]=$_POST["db_konfigurator"];
		}
		unset($_POST["db_konfigurator"]);		
	}


	if(isset($_SESSION["db_konfigurator"]))
	{		
		$_htaccess="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/.htaccess";
		$_new_htaccess=".htaccess";
		copy($_htaccess,$_new_htaccess);
		$_mkdir="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/mkdir.php";
		$_new_mkdir="mkdir.php";
		copy($_mkdir,$_new_mkdir);
		require_once"mkdir.php";	
		$_config="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/config.php";
		$_new_config="config.php";
		copy($_config,$_new_config);
		require_once"config.php";
		$_WebHash="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/Managers/WebHash.class.php";
		$_new_WebHash="CLASS/Managers/WebHash.class.php";
		copy($_WebHash,$_new_WebHash);
		
		if($_SESSION["db_konfigurator"]=='pzbdikd')
		{
			$_kreator_plikow=fopen("DB/db_".$_POST["nazwa_uzytkownika_bazy_danych"].".php","w")or die("Unable to open file!");
			$_zawartosc_pliku_db=
		'$db_user_name = "'.$_POST["nazwa_uzytkownika_bazy_danych"].'";
		$db_user_password = "'.$_POST["haslo_uzytkownika_bazy_danych"].'";'
					;
				$_zawartosc_kreowanego_pliku="<?php
		$_zawartosc_pliku_db
	?>";
				fwrite($_kreator_plikow,$_zawartosc_kreowanego_pliku);
				fclose($_kreator_plikow);
			
			$_kreator_plikow=fopen("DB/db_".$_POST["nazwa_bazy_danych"].".php","w")or die("Unable to open file!");
			$_zawartosc_pliku_db=
		'require_once"db_'.$_POST["nazwa_uzytkownika_bazy_danych"].'.php";
		$db_host = "'.$_POST["host_bazy_danych"].'";
		$db_name = "'.$_POST["nazwa_bazy_danych"].'";
		$db_connect = @new mysqli($db_host, $db_user_name, $db_user_password, $db_name);'
					;
				$_zawartosc_kreowanego_pliku="<?php
		$_zawartosc_pliku_db
	?>";
			fwrite($_kreator_plikow,$_zawartosc_kreowanego_pliku);
			fclose($_kreator_plikow);
						
			$_SESSION["admin_konfigurator"]=$_SESSION["db_konfigurator"];
			$_SESSION["zakonczenie_db_info"]='uzytkownik';
			unset($_SESSION["db_konfigurator"]);			
		}
		elseif($_SESSION["db_konfigurator"]=='pikd')
		{
			$_db="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/DB/db.php";
			$_new_db="DB/db.php";
			copy($_db,$_new_db);
			$_db_users="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/DB/db_users.php";
			$_new_db_users="DB/db_users.php";
			copy($_db_users,$_new_db_users);
			$_SESSION["admin_konfigurator"]=$_SESSION["db_konfigurator"];
			$_SESSION["zakonczenie_db_info"]='root';
			unset($_SESSION["db_konfigurator"]);
		}
	}











	









	//SESJA TWORZENIE ADMINISTRATORA STRONY
	if(isset($_SESSION["admin_konfigurator"]))
	{
		
		$_error_nazwa_administratora=NULL;
		$_haslo_administratora=NULL;		
		if(isset($_POST["admin_konfigurator"]))
		{
			if($_POST["admin_konfigurator"]=='ac')
			{
				$_ERROR=FALSE;
				if($_POST["nazwa_administratora"]=='')
				{
					$_error_nazwa_administratora=
						'color:rgb(255,0,0);'
					;
					$_ERROR=TRUE;
				}
				if($_POST["haslo_administratora"]=='')
				{
					$_error_haslo_administratora=
						'color:rgb(255,0,0);'
					;
					$_ERROR=TRUE;
				}
				if(($_ERROR==FALSE)&&($_ERROR!=TRUE))
				{
					$_SESSION["admin_konfigurator"]=$_POST["admin_konfigurator"];
				}
			}
			elseif($_POST["admin_konfigurator"]=='ap')
			{
				$_SESSION["admin_konfigurator"]=$_POST["admin_konfigurator"];
			}
		}
		
		
		$_encrypted_nazwa_administratora = NULL;
		$_encrypted_haslo_administratora = NULL;
		
		if($_SESSION["admin_konfigurator"]=='ac')
		{
			WebHash::load("Level_1");
			$_encrypted_nazwa_administratora = my_simple_crypt( $_POST["nazwa_administratora"], 'UNSECURE' );
			$_encrypted_haslo_administratora = my_simple_crypt( $_POST["haslo_administratora"], 'UNSECURE' );
			$_SESSION["zakonczenie"]=$_SESSION["admin_konfigurator"];
			$_SESSION["zakonczenie_admin_info"]='administrator';
			unset($_SESSION["admin_konfigurator"]);
		}
		elseif($_SESSION["admin_konfigurator"]=='ap')
		{
			$_encrypted_nazwa_administratora = 'admin';
			$_encrypted_haslo_administratora = '';
			$_SESSION["zakonczenie"]=$_SESSION["admin_konfigurator"];
			$_SESSION["zakonczenie_admin_info"]='admin';
			unset($_SESSION["admin_konfigurator"]);			
		}
		$_kreator_plikow=fopen("USERS/administrator_".$_encrypted_nazwa_administratora.".php","w")or die("Unable to open file!");		
		$_zawartosc_pliku_db=
	'$_nazwa_administratora = "'.$_encrypted_nazwa_administratora.'";
	$_haslo_administratora = "'.$_encrypted_haslo_administratora.'"';
			$_zawartosc_kreowanego_pliku="<?php
	$_zawartosc_pliku_db
	?>";
			fwrite($_kreator_plikow,$_zawartosc_kreowanego_pliku);
			fclose($_kreator_plikow);

		
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
								Administrator creation
							</h1>
							<div style="margin:10px;'.$_error_nazwa_administratora.'">
								Enter the username
								<br />
								<input style="width:300px;margin:10px;" type="text" name="nazwa_administratora">
							</div>
							<div style="margin:10px;'.$_haslo_administratora.'">
								Enter the password
								<br />
								<input style="width:300px;margin:10px;" type="password" name="haslo_administratora">
							</div>
							<div align="center">
								<button style="display:block;font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="admin_konfigurator" value="ac">
									CREATE AND CONFIGURE NEXT
								</button>
								<button style="font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="admin_konfigurator" value="ap">
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
		

	}







	//SESJA ZAKOŃCZENIE
	if(isset($_SESSION["zakonczenie"]))
	{
		$_HDcss="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CSS/HDstyle.css";
		$_new_HDcss="CSS/HDstyle.css";
		copy($_HDcss,$_new_HDcss);		
		$_ExtensionController="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/Managers/ExtensionController.class.php";
		$_new_ExtensionController="CLASS/Managers/ExtensionController.class.php";
		copy($_ExtensionController,$_new_ExtensionController);		
		$_WebBars="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebBars.class.php";
		$_new_WebBars="CLASS/WebBars.class.php";
		copy($_WebBars,$_new_WebBars);
		$_WebFooter="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebFooter.class.php";
		$_new_WebFooter="CLASS/WebFooter.class.php";
		copy($_WebFooter,$_new_WebFooter);
		$_WebHead="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebHead.class.php";
		$_new_WebHead="CLASS/WebHead.class.php";
		copy($_WebHead,$_new_WebHead);
		$_WebHeader="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebHeader.class.php";
		$_new_WebHeader="CLASS/WebHeader.class.php";
		copy($_WebHeader,$_new_WebHeader);
		$_WebIndex="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebIndex.class.php";
		$_new_WebIndex="CLASS/WebIndex.class.php";
		copy($_WebIndex,$_new_WebIndex);
		$_WebLegs="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebLegs.class.php";
		$_new_WebLegs="CLASS/WebLegs.class.php";
		copy($_WebLegs,$_new_WebLegs);
		$_WebReklamaHeader="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebReklamaHeader.class.php";
		$_new_WebReklamaHeader="CLASS/WebReklamaHeader.class.php";
		copy($_WebReklamaHeader,$_new_WebReklamaHeader);
		$_WebWritePole="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebWritePole.class.php";
		$_new_WebWritePole="CLASS/WebWritePole.class.php";
		copy($_WebWritePole,$_new_WebWritePole);
		$_WebWritePoleMenuTop="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebWritePoleMenuTop.class.php";
		$_new_WebWritePoleMenuTop="CLASS/WebWritePoleMenuTop.class.php";
		copy($_WebWritePoleMenuTop,$_new_WebWritePoleMenuTop);
		$_WebHeaderBottomMenu="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebHeaderBottomMenu.class.php";
		$_new_WebHeaderBottomMenu="CLASS/WebHeaderBottomMenu.class.php";
		copy($_WebHeaderBottomMenu,$_new_WebHeaderBottomMenu);		
		$_WebHeaderCenterMenu="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebHeaderCenterMenu.class.php";
		$_new_WebHeaderCenterMenu="CLASS/WebHeaderCenterMenu.class.php";
		copy($_WebHeaderCenterMenu,$_new_WebHeaderCenterMenu);		
		$_WebHeaderRightMenu="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebHeaderRightMenu.class.php";
		$_new_WebHeaderRightMenu="CLASS/WebHeaderRightMenu.class.php";
		copy($_WebHeaderRightMenu,$_new_WebHeaderRightMenu);
		$_WebHeaderLogoAndTitle="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/CLASS/WebHeaderLogoAndTitle.class.php";
		$_new_WebHeaderLogoAndTitle="CLASS/WebHeaderLogoAndTitle.class.php";
		copy($_WebHeaderLogoAndTitle,$_new_WebHeaderLogoAndTitle);					
		
		
		$_kreator_plikow=fopen("index.php","w")or die("Unable to open file!");		
		$_encrypted=" = my_simple_crypt( 'Hello World!', 'SECURE' ).'<br />';";
		$_decrypted=" = my_simple_crypt( 'aSttVEZZU2l2ZDJQYzd5cmIxeklSdz09', 'UNSECURE' );";
		$_przepisanie_indexu=
			'<?php
		//Copyright PACANOSIU Development productions :D	
		session_start();
		require_once("config.php");
		if(!isset($_GET["page"])) 
		{
			WebIndex::load("IndexIndex");
			WebHash::load("Level_1");
			echo$_encrypted'.$_encrypted.'
			echo$_decrypted'.$_decrypted.'
		} 
		else 
		{    
			$_page_extension = new ExtensionController($_GET["page"]);    
		}
?>'
		;
		fwrite($_kreator_plikow,$_przepisanie_indexu);
		fclose($_kreator_plikow);
		
		$_zakonczenie_admin=NULL;
		$_zakonczenie_db=NULL;
		if(isset($_SESSION["zakonczenie_db_info"]))
		{
			if($_SESSION["zakonczenie_db_info"]=='root')
			{
				$_zakonczenie_db='A STANDARD DATABASE CONECTION CREATED WITH THE NAME LOCALHOST AND USER NAME ROOT WITHOUT A PASSWORD';
			}
			elseif($_SESSION["zakonczenie_db_info"]=='uzytkownik')
			{
				$_zakonczenie_db='A PRIVATE DATABASE CONNECTION CREATED';
			}
			unset($_SESSION["zakonczenie_db_info"]);
		}		
		if(isset($_SESSION["zakonczenie_admin_info"]))
		{
			if($_SESSION["zakonczenie_admin_info"]=='administrator')
			{
				$_zakonczenie_admin='A PRIVATE ADMINISTRATOR CREATED';
			}
			elseif($_SESSION["zakonczenie_admin_info"]=='admin')
			{
				$_zakonczenie_admin='A STANDARD ADMINISTRATOR WAS CREATED WITH THE NAME ADMIN WITHOUT A PASSWORD';
			}
			unset($_SESSION["zakonczenie_admin_info"]);
		}
		
		unset($_POST);
		unset($_SESSION["zakonczenie"]);
		
		$_SESSION["zakonczenie_info"]='
		<br />'
		.$_zakonczenie_db.'
		<br />'
		.$_zakonczenie_admin.'
		<br />
		YOU CAN GO NOW TO THE
		<a href="/">
			HOMEPAGE 
		</a>
		OR CONFIGURE EVERYTHING FROM THE BEGINNING
		<br />';
		header("location:configurator.php");
	}






























	
			
			
		
		
	//STRONA POCZĄTKOWA Z FORMULARZEM POŁĄCZENIA Z BAZĄ DANYCH
	if((!isset($_SESSION["db_konfigurator"]))&&(!isset($_SESSION["admin_konfigurator"]))&&(!isset($_SESSION["zakonczenie"])))
	{
		$_zakonczenie_info=NULL;
		if(isset($_SESSION["zakonczenie_info"]))
		{
			$_zakonczenie_info='<div style="color:rgb(150,0,0);">'.$_SESSION["zakonczenie_info"].'</div>';
			
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
								<button style="display:block;font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="db_konfigurator" value="pzbdikd">
									CONNECT WITH DATABASE AND CONFIGURE NEXT
								</button>
								<button style="font-family:Montserrat,sans-serif;font-size:20px;padding:10px;margin:10px;cursor:pointer;" type="submit" name="db_konfigurator" value="pikd">
									SKIP AND CONFIGURE NEXT
								</button>
							</div>
							<div>
								no worries, you will be able to connect to the database later
							</div>
							'.$_zakonczenie_info.'
						</form>
					</div>	
				</body>
				<footer style="position:absolute;bottom:1px;right:1px;font-size:10px;font-family:Montserrat,sans-serif;">
					Web Configurator PACANOSIU BETA 2020.01
				</footer>
			</html>'
		;
	}
?>
