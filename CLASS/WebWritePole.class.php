<?php
	class WebWritePole 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{				
				case "IndexWritePole":
					echo 
						'<section class="web_write_pole">'
					;
					WebWritePoleMenuTop::load('IndexMenuTopWebWritePole');		
					echo		
						'	<div class="web_write_pole_post">
								<h2>
									Welcome to my website!
								</h2>
							</div>	
						</section>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
