<?php
	//Copyright PACANOSIU Development productions :D
	class WebHeaderBottomMenu 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexDisplay":
					echo 
						'<div class="header_bottom_menu">
							<div class="header_bottom_menu_left">
								<div class="header_bottom_menu_main_title">
									Text 1
								</div>
								<div class="header_bottom_menu_main_title">
									Text 2
								</div>
								<div class="header_bottom_menu_main_title">
									Text 3
								</div>
								<div class="header_bottom_menu_main_title">
									Text 4
								</div>
							</div>	
							
							<div class="header_bottom_menu_middle">
								<div class="header_bottom_menu_main_title">
									<img src="" style="height:13px;width:15px;">
									Text 1
								</div>
								<div class="header_bottom_menu_main_title">
									<img src="" style="height:13px;width:15px;">
									Text 1
								</div>
								<div class="header_bottom_menu_main_title">
									Text 1
									<img src="" style="height:13px;width:15px;">
								</div>
								<div class="header_bottom_menu_main_title">
									Text 1
									<img src="" style="height:13px;width:15px;">
								</div>
								<div class="header_bottom_menu_main_title">
									Text 1
									<img src="" style="height:13px;width:15px;">
								</div>
							</div>
							
							<div class="header_bottom_menu_right">
								<div class="header_bottom_menu_main_title">
									TEXT 1
								</div>
								<div class="header_bottom_menu_main_title">
									TEXT 1
								</div>
								<div class="header_bottom_menu_main_title">
									TEXT 1
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
