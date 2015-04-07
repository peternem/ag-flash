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

//// SEM CAMPAIGNS URLS WITH SPECIAL URL's
$urlBuilder = preg_match("/\?utm_source\=*/",$url, $matches)== 1;
$gclid = preg_match("/\?gclid\=*/",$url, $matches)== 1;

$ConstantContact = "estate_collection.php?utm_source=ConstantContact&utm_medium=e-blast&utm_campaign=September%2BPromo";

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD COLLECTION SWF FILE
	case ($filename=='collections.php'):
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','549','src','preloader_collections','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#BDB7A5','wmode','transparent','movie','preloader_collections' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='800' height='549'>
			<param name='movie' value='preloader_collections.swf' />
			<param name='quality' value='high' />
			<param name='BGCOLOR' value='#BDB7A5' />
			<param name='wmode' value='transparent' />
			<embed src='preloader_collections.swf' width='800' height='549' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;	
	//// LOAD ESTATE COLLECTION SWF FILE
	case ($filename=='estate_collection.php' || $filename==$ConstantContact ):
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','549','src','preloader_estate','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','wmode','transparent','movie','preloader_estate' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0' width='800' height='549'>
			  <param name='movie' value='preloader_estate.swf' />
			  <param name='quality' value='high' />
			  <param name='wmode' value='transparent' />
			  <embed src='preloader_estate.swf' width='800' height='549' quality='high' pluginspage='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' wmode='transparent'></embed>
		</object>
		</noscript>"; 
	break;
	//// LOAD ACCENT COLLECTION SWF FILE
	case($filename=='accent_collection.php'):
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','549','src','preloader_accent','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#BDB7A5','wmode','transparent','movie','preloader_accent' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='800' height='549'>
			  <param name='movie' value='preloader_accent.swf' />
			  <param name='quality' value='high' />
			  <param name='BGCOLOR' value='#BDB7A5' />
			  <param name='wmode' value='transparent' />
		  <embed src='preloader_accent.swf' width='800' height='549' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;
	//// LOAD FRESCO COLLECTION SWF FILE
	case($filename=='fresco_collection.php'):
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','800','height','549','src','preloader_fresco','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#BDB7A5','wmode','transparent','movie','preloader_fresco' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0' width='800' height='549'>
			<param name='movie' value='preloader_fresco.swf' />
			<param name='quality' value='high' />
			<param name='BGCOLOR' value='#BDB7A5' />
			<param name='wmode' value='transparent' />
			<embed src='preloader_fresco.swf' width='800' height='549' quality='high' pluginspage='http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;
	//// LOAD VISION COLLECTION SWF FILE
	case($filename=='vision_collection.php'):
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','549','src','preloader_vision','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#BDB7A5','wmode','transparent','movie','preloader_vision' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='800' height='549'>
			<param name='movie' value='preloader_vision.swf' />
			<param name='quality' value='high' />
			<param name='BGCOLOR' value='#BDB7A5' />
			<param name='wmode' value='transparent' />
			<embed src='preloader_vision.swf' width='800' height='549' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;
	case($filename=='dealer_locator.php'):
		echo "<img src='images/dealer-intro-2.jpg' border='0' alt='Agalite Showerdoor Dealer Locator' usemap='#Map' />
    			<map name='Map' id='Map'>
			<area shape='rect' coords='578,28,783,86' href='index.php' alt='Visit Agalite Shower Doors Website'/>
		    	</map> ";
    	break;
	//// LOAD PORTA COLLECTION AG HEAVY GLS HARDWARE SWF FILE
	case ($filename=='agalite_hardware.php'):
	$portaSWF = "preloader_aghardware.swf";
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','549','src','preloader_aghardware','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#BDB7A5','wmode','transparent','movie','preloader_aghardware' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='800' height='549'>
			<param name='movie' value='$portaSWF' />
			<param name='quality' value='high' />
			<param name='BGCOLOR' value='#BDB7A5' />
			<param name='wmode' value='transparent' />
			<embed src='$portaSWF' width='800' height='549' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;
	case($filename=='agalite-shower-doors-glass.php'):
	$glassSWF = "agalite_showerDoors_Glass.swf";
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','549','src','agalite_showerDoors_Glass','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#BDB7A5','wmode','transparent','movie','agalite_showerDoors_Glass' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='800' height='549'>
			<param name='movie' value='$glassSWF' />
			<param name='quality' value='high' />
			<param name='BGCOLOR' value='#BDB7A5' />
			<param name='wmode' value='transparent' />
			<embed src='$glassSWF' width='800' height='549' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;
	case($filename=='agalite-shower-doors-glass1.php'):
	$glassSWF1 = "agalite_showerDoors_Glass1.swf";
		echo "<script type='text/javascript'>
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','800','height','549','src','agalite_showerDoors_Glass1','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','bgcolor','#BDB7A5','wmode','transparent','movie','agalite_showerDoors_Glass1' ); //end AC code
		</script>";
		echo "<noscript>
		<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='800' height='549'>
			<param name='movie' value='$glassSWF1' />
			<param name='quality' value='high' />
			<param name='BGCOLOR' value='#BDB7A5' />
			<param name='wmode' value='transparent' />
			<embed src='$glassSWF1' width='800' height='549' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' bgcolor='#BDB7A5' wmode='transparent'></embed>
		</object>
		</noscript>";
	break;
	default:
		echo "<b>Load SWF File Error!<b>";
}

?>
