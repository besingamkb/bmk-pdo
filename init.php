<?php 

define('ENVIRONMENT', 'development');

switch (ENVIRONMENT) {
	case 'development':
		# code...
		error_reporting(E_ALL); // for development
		break;
	
	default:
		# code...
		error_reporting(0); // for production
		break;
}

foreach (glob("class/*.php") as $filename)
{
    require $filename;
}

?>