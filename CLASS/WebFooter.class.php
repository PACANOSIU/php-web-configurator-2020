<?php
	class WebFooter 
	{
		static public function load($MODULE) 
		{
			switch($MODULE) 
			{
				case "IndexFooter":
					echo 
						'<footer>
							<p>PACANOSIU</p>
						</footer>'
					;
				break;
				default;
				break;
			}
		}
	}
?>
