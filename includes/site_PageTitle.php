<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);

$urlBuilder = preg_match("/\?utm_source\=*/",$url, $matches)== 1;
$gclid = preg_match("/\?gclid\=*/",$url, $matches)== 1;
// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD INDEX copy
	case ($filename=='index.php'):
		echo "Agalite Shower &amp; Bath Enclosures: The Focal Point Of Bathroom Design";
		//echo "Agalite Shower &amp; Bath Enclosures: Agalite Bathroom Shower Doors Are The Focal Point Of Bathroom Design";
	break;
	//// LOAD Collections
	case ($filename=='collections.php'):
		echo "Agalite Shower &amp; Bath Enclosures: The Collections";
		//echo "Agalite Shower &amp; Bath Enclosures: The Collections - Four Different Collections To Complement Any Bathroom Shower or Bath Enclosure Design";
	break;	
		//// LOAD Hardware copy
	case ($filename=='agalite_hardware.php'):
		echo "Agalite Shower &amp; Bath Enclosures: Heavy Glass Shower Door Hardware";
		//echo "Agalite Heavy Glass Shower Door Hardware - Porta &amp; Grazia Frameless Shower Door Hardware";
	break;	
	//// LOAD ESTATE COLLECTION copy
	case ($filename=='estate_collection.php'):
		echo "Agalite: Estate Collection – Frameless Shower &amp; Bath Enclosures";
		//echo "Agalite Shower &amp; Bath Enclosures: The Estate Collection - Custom Heavy Glass Frameless Shower Doors";
	break;
	//// LOAD ACCENT COLLECTION SWF FILE
	case($filename=='accent_collection.php'):
		echo "Agalite: Accent Collection – Frameless Shower &amp; Bath Enclosures";
		//echo "Agalite Shower &amp; Bath Enclosures: The Accent Collection - Distinctive and Versatile Frameless Shower and Bath Enclosures";
	break;
	//// LOAD FRESCO COLLECTION SWF FILE
	case($filename=='fresco_collection.php'):
		echo "Agalite: Fresco Collection – Framed Shower &amp; Bath Enclosures";
		//echo "Agalite Shower &amp; Bath Enclosures: The Fresco Collection - Stylish and Durable Fully Framed Shower and Bath Enclosures";
	break;
	//// LOAD Vision COLLECTION SWF FILE
	case($filename=='vision_collection.php'):
		echo "Agalite: Vision Collection – Semi-Frameless Shower &amp; Bath Enclosures";
		//echo "Agalite Shower &amp; Bath Enclosures: The Vision Collection - Contemporary and Practical Bathroom Shower and Tub Enclosures ";
	break;
	//// LOAD VISION COLLECTION SWF FILE
	case($filename=='resources.php'):
		echo "Agalite: Resources – Brochures, Instructions, Manuals, Care &amp; Cleaning";
		//echo "Agalite Shower &amp; Bath Enclosures: Resources - Agalite Brochures, Installation Instructions, Owner's Manuals, ClearShield, ShowerGuard";
	break;
	//// LOAD agalite-shower-doors-glass
	case($filename=='agalite-shower-doors-glass.php'):
		echo "Agalite: Shower Door Glass - ClearShield, ShowerGuard, Tinted, Low-Iron, Pattern Glass";
		//echo "Agalite: Shower Door Glass - ClearShield, ShowerGuard, Tinted, Low-Iron, Pattern Glass";
	break;
	
		//// LOAD page title - SEM cmpaigns
	case ($urlBuilder || $gclid):
		echo "Agalite Shower &amp; Bath Enclosures";
		//echo "Agalite Shower &amp; Bath Enclosures: The Collections - Four Different Collections To Complement Any Bathroom Shower or Bath Enclosure Design";
	break;	
	
	default:
		echo "site_PageTitle.php File Error!";
}

?>
