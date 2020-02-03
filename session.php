<?php
	if(($_SERVER["REMOTE_ADDR"]=="::1")&&($_SERVER["SERVER_ADDR"]=="::1"))
	{
		session_start();
	}
?>
