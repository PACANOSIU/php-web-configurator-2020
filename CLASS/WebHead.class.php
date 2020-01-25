<?php
	//Copyright PACANOSIU Development productions :D
	class WebHead 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{
				case "IndexHead":
					echo 
						'<head>
							<title>PACANOSIU</title>
							<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
							<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
							<link rel="stylesheet" href="CSS/HDstyle.css">
							<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
						</head>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
