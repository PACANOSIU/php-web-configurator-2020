<?php
	if(!is_dir("CLASS"))
	{
		mkdir("CLASS");
	}
	if(!is_dir("CLASS/Managers"))
	{
		mkdir("CLASS/Managers");
	}
	if(!is_dir("CSS"))
	{
		mkdir("CSS");
	}
	if(!is_dir("DB"))
	{
		mkdir("DB");
	}
	if(!is_dir("GRAHICS"))
	{
		mkdir("GRAHICS");
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
	set_include_path(get_include_path().PATH_SEPARATOR ."CSS");
	set_include_path(get_include_path().PATH_SEPARATOR ."DB");
	set_include_path(get_include_path().PATH_SEPARATOR ."GRAHICS");
	set_include_path(get_include_path().PATH_SEPARATOR ."LIBRARY");
	set_include_path(get_include_path().PATH_SEPARATOR ."USERS");
?>
