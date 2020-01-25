<?php
	//Copyright PACANOSIU Development productions :D
	ob_start();
	$AbsoluteURL = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$dirCat = dirname($_SERVER["PHP_SELF"]);
	$AbsoluteURL .= $_SERVER["HTTP_HOST"];
	$AbsoluteURL .= $dirCat != "\\" ? $dirCat : "";
	$slash = substr($AbsoluteURL, -1);
	$NewURL = $slash != "/" ? $AbsoluteURL."/" : $AbsoluteURL;
	$_mkdir="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/8d1fdfcccc21bf63f88a6b04fb5077cbc61b4e7d/mkdir.php";
	$_new_mkdir="mkdir.php";
	copy($_mkdir,$_new_mkdir);
	require_once"mkdir.php";	
	spl_autoload_register(function($_className)
	{
		include_once($_className.".class.php");
	});
?>
