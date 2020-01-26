<?php
	//Copyright PACANOSIU Development productions :D
	class WebHash 
	{
		static public function load($_MODULE) 
		{
			switch($_MODULE) 
			{		
				case "Level_1":
					function my_simple_crypt( $_string, $_action = 'SECURE' ) 
					{
						$_secret_key = 
							'RWdVajA4dUxHTkEzQW5XR3FKbmpPMXZmZUxnczZNZGd6NENHZXdzYnNvMEhkWUoxakpZZDE4TC
							0x3V1BlbW1mVWpkeEpOWE5ZSHpWZk55SFRKbE1wZ012OTZ0QTR4OEdEVjZPUWIrMmRGL1luNUh2aWhnNkRpSFZpST
							E4Y2NpQ0x6WVZWTHd5RGRuUGtGV296OXBWdzQ0SWsrM1VmT29hdkpXdWgzRXlYWjU4TmNCazVQV2oyMy9aZGt1aTB
							NMG5uVEpOU0E3Q2UzM25YSFp4VVA5V3BENUhnbEFnc2tNeTB3S1NQMlg2d3l4Mlp0VUJ6N1FNMEJISUVCZWtGd0to
							S1ZGaFFHcXZLRnZGTzhSdkE4d3dTbVRWQ0hPVktydG1jWktrbndtYjJIU254THZhTjZjeWU0VFVaRXFyaHYwdk1jR
							GJIc25jTWtUU0hVQjQzbERFeTFLd3VuUEtPV0NmM3RXNFZCSGdIcS9zPQmM3RXNFZCSGdIcS9zPQmM3RXNFZCSGdI'
						;
						
						$_secret_iv = 
							'S1ZGaFFHcXZLRnZGTzhSdkE4d3dTbVRWQ0hPVktydG1jWktrbndtYjJIU254THZhTjZjeWU0VFV
							GJIc25jTWtUU0hVQjQzbERFeTFLd3VuUEtPV0NmM3RXNFZCSGdIcS9zPQmM3RXNFZCSGdIcS9zPQmM3RXNFZCSGdI
							RWdVajA4dUxHTkEzQW5XR3FKbmpPMXZmZUxnczZNZGd6NENHZXdzYnNvMEhkWUoxakpZZDE4TCpZZDE4TCpZZDE4T
							0x3V1BlbW1mVWpkeEpOWE5ZSHpWZk55SFRKbE1wZ012OTZ0QTR4OEdEVjZPUWIrMmRGL1luNUh2aWhnNkRpSFZpST
							E4Y2NpQ0x6WVZWTHd5RGRuUGtGV296OXBWdzQ0SWsrM1VmT29hdkpXdWgzRXlYWjU4TmNCazVQV2oyMy9aZGt1aTB
							NMG5uVEpOU0E3Q2UzM25YSFp4VVA5V3BENUhnbEFnc2tNeTB3S1NQMlg2d3l4Mlp0VUJ6N1FNMEJISUVCZWtGd0to'
						;
						
						$_output = false;
						$_encrypt_method = "AES-256-CBC";
						$_key = hash( 'sha256', $_secret_key );
						$_iv = substr( hash( 'sha256', $_secret_iv ), 0, 16 );
					 
						if( $_action == 'SECURE' ) 
						{
							$_output = base64_encode( openssl_encrypt( $_string, $_encrypt_method, $_key, 0, $_iv ) );
						}
						elseif( $_action == 'UNSECURE' )
						{
							$_output = openssl_decrypt( base64_decode( $_string ), $_encrypt_method, $_key, 0, $_iv );
						}
						return $_output;
					}
				break;
				default;
				break;
			}
		}
	}
?>
