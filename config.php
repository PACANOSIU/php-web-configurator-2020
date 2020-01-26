<?php
	//Copyright PACANOSIU Development productions :D
	ob_start();
	$AbsoluteURL = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$dirCat = dirname($_SERVER["PHP_SELF"]);
	$AbsoluteURL .= $_SERVER["HTTP_HOST"];
	$AbsoluteURL .= $dirCat != "\\" ? $dirCat : "";
	$slash = substr($AbsoluteURL, -1);
	$NewURL = $slash != "/" ? $AbsoluteURL."/" : $AbsoluteURL;
	require_once"mkdir.php";	
	spl_autoload_register(function($_className)
	{
		include_once($_className.".class.php");
	});
?>
