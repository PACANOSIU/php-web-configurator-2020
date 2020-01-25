<?php
	//Copyright PACANOSIU Development productions :D
	class WebHeader 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexHeader":
					echo 
						'<section class="web_header">'
					;
					WebHeaderLogoAndTitle::load("IndexDisplay");
					WebHeaderCenterMenu::load("IndexDisplay");		
					WebHeaderRightMenu::load("IndexDisplay");		
					WebHeaderBottomMenu::load("IndexDisplay");		
					echo		
						'</section>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
