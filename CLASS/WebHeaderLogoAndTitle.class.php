<?php
	//Copyright PACANOSIU Development productions :D
	class WebHeaderLogoAndTitle 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexDisplay":
					echo 
						'<div class="header_logo_and_title">
								<a href="/">
									<img src="" style="height:40px;">
									<h1>
										SITE NAME
									</h1>
								</a>
							</div>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
