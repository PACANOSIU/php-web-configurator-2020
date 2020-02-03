<?php
	if(!is_dir("CLASS"))
	{
		mkdir("CLASS");
	}
	if(!is_dir("CLASS/Managers"))
	{
		mkdir("CLASS/Managers");
	}
	if(!is_dir("CONFIGURATORS"))
	{
		mkdir("CONFIGURATORS");
	}
	if(!is_dir("CSS"))
	{
		mkdir("CSS");
	}
	if(!is_dir("DB"))
	{
		mkdir("DB");
	}
	if(!is_dir("DB/Users"))
	{
		mkdir("DB/Users");
	}	
	if(!is_dir("DB/Connections"))
	{
		mkdir("DB/Connections");
	}
	if(!is_dir("FORMS"))
	{
		mkdir("FORMS");
	}
	if(!is_dir("GRAHICS"))
	{
		mkdir("GRAHICS");
	}
	if(!is_dir("HOSTS"))
	{
		mkdir("HOSTS");
	}
	if(!is_dir("LIBRARY"))
	{
		mkdir("LIBRARY");
	}
	if(!is_dir("USERS"))
	{
		mkdir("USERS");
	}
	set_include_path(get_include_path().PATH_SEPARATOR ."CLASS");
	set_include_path(get_include_path().PATH_SEPARATOR ."CLASS/Managers");
	set_include_path(get_include_path().PATH_SEPARATOR ."CONFIGURATORS");
	set_include_path(get_include_path().PATH_SEPARATOR ."CSS");
	set_include_path(get_include_path().PATH_SEPARATOR ."DB");
	set_include_path(get_include_path().PATH_SEPARATOR ."DB/Users");	
	set_include_path(get_include_path().PATH_SEPARATOR ."DB/Connections");
	set_include_path(get_include_path().PATH_SEPARATOR ."FORMS");
	set_include_path(get_include_path().PATH_SEPARATOR ."GRAHICS");
	set_include_path(get_include_path().PATH_SEPARATOR ."HOSTS");
	set_include_path(get_include_path().PATH_SEPARATOR ."LIBRARY");
	set_include_path(get_include_path().PATH_SEPARATOR ."USERS");
?>

