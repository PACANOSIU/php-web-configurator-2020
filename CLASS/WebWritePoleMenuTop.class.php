<?php
	class WebWritePoleMenuTop 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexMenuTopWebWritePole":
					echo 
						'<div class="web_write_pole_menu_top">							
							<div class="web_write_pole_menu_top_left">
								<div class="web_write_pole_menu_top_title">
									Test L 1
								</div>
								<div class="web_write_pole_menu_top_title">
									Test L 2
								</div>
								<div class="web_write_pole_menu_top_title">
									Test L 3
								</div>
							</div>
							<div class="web_write_pole_menu_top_center" align="center">
								<div class="web_write_pole_menu_top_title">
									Test C 1
								</div>
								<div class="web_write_pole_menu_top_title">
									Test C 2
								</div>
								<div class="web_write_pole_menu_top_title">
									Test C 3
								</div>
							</div>
							<div class="web_write_pole_menu_top_right">
								<div class="web_write_pole_menu_top_title">
									Test R 1
								</div>
								<div class="web_write_pole_menu_top_title">
									Test R 2
								</div>
								<div class="web_write_pole_menu_top_title">
									Test R 3
								</div>
							</div>							
						</div>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
