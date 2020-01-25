<?php
	//Copyright PACANOSIU Development productions :D
	ob_start();
	$_AbsoluteURL=(isset($_SERVER["HTTPS"])&&$_SERVER["HTTPS"]=="on")?"https://":"http://";
	$_dirCat=dirname($_SERVER["PHP_SELF"]);
	$_AbsoluteURL.=$_SERVER["HTTP_HOST"];
	$_AbsoluteURL.=$_dirCat!="\\"?$_dirCat:"";
	$_slash=substr($AbsoluteURL,-1);
	$_NewURL=$_slash!="/"?$_AbsoluteURL."/":$_AbsoluteURL;
	$_mkdir="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/mkdir.php";
	$_new_mkdir="mkdir.php";
	copy($_mkdir,$_new_mkdir);
	require_once"mkdir.php";
?>
