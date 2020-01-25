<?php
	class WebHeaderRightMenu 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexDisplay":
					echo 
						'<div class="header_right_menu" style="margin:-10px 0 0 0;">
							<div class="header_right_menu_main_title">
								<a href="">
									<img src="" style="height:20px;width:30px;">
								</a>
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
