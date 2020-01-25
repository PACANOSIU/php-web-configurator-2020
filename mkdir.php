<?php
	if(!is_dir("CLASS"))
	{
		mkdir("CLASS");
		set_include_path(get_include_path().PATH_SEPARATOR ."CLASS");
	}
	if(!is_dir("CLASS/Managers"))
	{
		mkdir("CLASS/Managers");
		set_include_path(get_include_path().PATH_SEPARATOR ."CLASS/Managers");
	}
	if(!is_dir("CSS"))
	{
		mkdir("CSS");
		set_include_path(get_include_path().PATH_SEPARATOR ."CSS");
	}
	if(!is_dir("DB"))
	{
		mkdir("DB");
		set_include_path(get_include_path().PATH_SEPARATOR ."DB");
	}
	if(!is_dir("GRAHICS"))
	{
		mkdir("GRAHICS");
		set_include_path(get_include_path().PATH_SEPARATOR ."GRAHICS");
	}
	if(!is_dir("LIBRARY"))
	{
		mkdir("LIBRARY");
		set_include_path(get_include_path().PATH_SEPARATOR ."LIBRARY");
	}
	spl_autoload_register(function($_className)
	{
		include_once($_className.".class.php");
	});
?>
