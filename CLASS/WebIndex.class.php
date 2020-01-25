<?php
	class WebIndex 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{		
				case"IndexIndex":
					if($_SERVER["REMOTE_ADDR"]=="::1")
					{		
						echo
							'<!DOCTYPE html>
							<html>'
						;
						WebHead::load("IndexHead");
						echo
							'<body align="center">'
						;
						WebHeader::load("IndexHeader");
						WebReklamaHeader::load("IndexReklamaHeader");
						WebBars::load("IndexBars");
						WebWritePole::load("IndexWritePole");
						WebLegs::load("IndexLegs");
						WebFooter::load("IndexFooter");
						echo
							'</body>
							</html>'
						;
					}				
				break;
				default;
				break;
			}
		}
	}
?>
