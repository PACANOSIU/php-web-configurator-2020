<?php
	ob_start();
	$AbsoluteURL = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$dirCat = dirname($_SERVER["PHP_SELF"]);
	$AbsoluteURL .= $_SERVER["HTTP_HOST"];
	$AbsoluteURL .= $dirCat != "\\" ? $dirCat : "";
	$slash = substr($AbsoluteURL, -1);
	$NewURL = $slash != "/" ? $AbsoluteURL."/" : $AbsoluteURL;
	spl_autoload_register(function($className)
	{
		include_once($className.".class.php");
	});
?>
