<?php
	//Copyright PACANOSIU Development productions :D
	class ExtensionController 
	{   
		private $active_page;    
		public function __construct($ACTIVE_PAGE) 
		{        
			$this->active_page = $ACTIVE_PAGE;        
			switch($this->active_page) 
			{            
				case "welcome-website":
				require_once $this->active_page.".php";
				break;
			}        
		}   
	}
?>
