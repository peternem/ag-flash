<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);

// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 
////Collection URL
$url = "index.php";
$url1 = "collections.php";
$url2 = "estate_collection.php";
$url3 = "accent_collection.php";
$url4 = "fresco_collection.php";
$url5 = "vision_collection.php";
$url6 = "agalite_hardware.php";
$url7 = "silhouette_slider_collection.php";
$url8 = "silhouette_slider_collection.php";

$ConstantContact = "estate_collection.php?utm_source=ConstantContact&utm_medium=e-blast&utm_campaign=September%2BPromo";


//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//Collections
	case ($filename== $url1):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url6' target='_parent' title='Agalite Heavy Glass Hardware'>Agalite Hardware</a>&nbsp;|&nbsp;<a href='$url2' target='_parent' title='Estate Collection Shower Enclosures and Bath Enclosures'>Estate Collection</a>
		<img src='images/arrow-forward.gif' class='icon'/> ";
	break;	
	//Estate Collection
	case ($filename==$url2):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url6' target='_parent' title='Agalite Heavy Glass Hardware'>Agalite Hardware</a>&nbsp;|&nbsp;<a href='$url3' target='_parent' title='Accent Collection Shower Enclosures and Bath Enclosures'>Accent Collection</a>
		<img src='images/arrow-forward.gif' class='icon'/> ";
	break;
	//Accent Collection	
	case($filename==$url3 || $filename==$ConstantContact):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url2' target='_parent' title='Estate Collection Shower Enclosures and Bath Enclosures'>Estate Collection</a>&nbsp;|&nbsp;<a href='$url4' target='_parent' title='Fresco Collection Shower Enclosures and Bath Enclosures'>Fresco Collection</a>
		<img src='images/arrow-forward.gif' class='icon' alt=''/>";
	break;
    
	//Fresco Collection
	case($filename==$url4):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url3' target='_parent' title='Accent Collection Shower Enclosures and Bath Enclosures'>Accent Collection</a>&nbsp;|&nbsp;<a href='$url5'target='_parent' title='Vision Collection Shower Enclosures and Bath Enclosures'>Vision Collection</a>
		<img src='images/arrow-forward.gif' class='icon' alt=''/>";
	break;
	//Vision Collection
	case($filename==$url5):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url4' title='Fresco Collection Shower Enclosures and Bath Enclosures'>Fresco Collection</a>&nbsp;|&nbsp;<a href='$url6' target='_parent' title='Agalite Heavy Glass Hardware'>Agalite Hardware</a>
		<img src='images/arrow-forward.gif' class='icon' alt=''/>";
	break;
	//Agalite Hardware
	case ($filename==$url6):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url5' title='Vision Collection Shower Enclosures and Bath Enclosures'>Vision Collection</a>&nbsp;|&nbsp;<a href='$url2' target='_parent' title='Estate Collection Shower Enclosures and Bath Enclosures'>Estate Collection</a>
		<img src='images/arrow-forward.gif' class='icon' alt=''/>";
	break;
    //Silhouette Collection	
	case($filename==$ur7 || $filename==$ConstantContact):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url6' target='_parent' title='Estate Collection Shower Enclosures and Bath Enclosures'>Estate Collection</a>&nbsp;|&nbsp;<a href='$url8' target='_parent' title='Silhouette Slider Collection'>Silhouette Slider Collection</a>
		<img src='images/arrow-forward.gif' class='icon' alt=''/>";
	break;
    //Silhouette Collection	
	case($filename==$ur8 || $filename==$ConstantContact):
		echo "<img src='images/arrow-back.gif' class='icon' alt=''/>
		<a href='$url6' target='_parent' title='Estate Collection Shower Enclosures and Bath Enclosures'>Estate Collection</a>&nbsp;|&nbsp;<a href='$url3' target='_parent' title='Accent Collection'>Accent Collection</a>
		<img src='images/arrow-forward.gif' class='icon' alt=''/>";
	break;
	default:
		echo "<b>Collection_menu.php !Error!<b>";
}
?>
