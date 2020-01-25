<?php
	//Copyright PACANOSIU Development productions :D
	class WebReklamaHeader 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case "IndexReklamaHeader":
					echo 
						'<section class="web_bars" align="center" title="REKLAMA">
							<div style="width:730px;height:100px;display:inline-block;margin:-1px 0 -13px 0;">
								
							</div>
							<div style="display:inline-block;color:rgb(222,222,222);vertical-align:top;margin:30px 20px 0 20px;font-family: Montserrat, sans-serif;font-size:12px;">
								<- ADVERTISE ->
							</div>
							<div style="width:730px;height:100px;display:inline-block;margin:-1px 0 -13px 0;">
								
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
