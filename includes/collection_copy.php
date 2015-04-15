<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);

//// SEM CAMPAIGNS URLS WITH SPECIAL URL's
$urlBuilder = preg_match("/\?utm_source\=*/",$url, $matches)== 1;
$gclid = preg_match("/\?gclid\=*/",$url, $matches)== 1;
//http://www.agalite.com/?utm_source=ConstantContact&utm_medium=e-blast&utm_campaign=e-blast
$ConstantContact = "estate_collection.php?utm_source=ConstantContact&utm_medium=e-blast&utm_campaign=September%2BPromo";
// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD INDEX copy
	case ($filename=='index.php'):
		echo "<h1>Welcome To Agalite Shower &amp; Bath Enclosures</h1>\n\n";
		//echo "<h1>Welcome To Agalite </h1>\n\n";
		echo "<p>Since your bath is a reflection of your style, selecting a distinctive shower enclosure, tub enclosure and hardware is paramount. 
		The timeless beauty of glass combined with Agalite's design simplicity creates an enclosure not only elegant, but also easy to maintain. 
		Almost any metal finish, shower door hardware, and type of glass can be combined to match your décor in a particularly stylish way. 
		Our commitment to provide luxurious quality that you can feel and see every time you use your bath is unwavering. 
		Our lifetime warranty on all of our glazed units is your assurance that we build \"beauty to last a lifetime.\"</p>\n";
	break;
		//// LOAD Agalite Heavy Glass Hardware Porta Collection copy
	case ($filename=='collections.php'):
		echo "<h1>The Five Agalite Shower Door Collections</h1>\n";
		echo '<p>We want to help you choose a collection that best matches your personal style, bathroom design and budget. Agalite\'s five main 
        collections include the heavy glass <b>Estate Collection</b>; the updated and Euro-minimal <b>Silhouette Collection</b>; and the original 
        heavy glass <b>Accent Collection</b>.  We also offer the stylish and durable <b>Fresco Collection</b>; and its contemporary counterpart, 
        the <b>Vision Collection</b>.  Each Agalite Collection comes in a variety of different shower or tub enclosure configurations, 
        metal colors and glass options.  Estate units use our industry leading Agalite Hardware line of hinges and clamps for 1/2" and 3/8" 
        glass enclosures. Click on the links above to learn more about Agalite\'s Five Collections.</p>';
	break;	
	//// LOAD ESTATE COLLECTION copy
	case ($filename=='estate_collection.php'):
		echo "<h1>Estate Collection - 1/2&quot; or 3/8&quot; Frameless Shower Door Glass, Solid Brass Hardware</h1>\n";
		echo "<p>The Estate Collection is simply the best. Every Estate Collection door we produce is custom made to fit your 
		shower enclosure. Estate shower doors are created using the heaviest, best quality 3/8&quot; or 1/2&quot; thick glass and 
		feature finely polished edges that provide a seamless design giving the feel of fine crystal. All Estate shower 
		doors use the highest quality solid brass hardware available in a variety of finishes.</p>\n";
		echo "<p>What does this mean to you? It is our assurance that your shower enclosure or tub enclosure will be the ultimate expression of elegance, style and quality.</p>\n"; 
	break;
	//// LOAD ACCENT COLLECTION copy
	case($filename=='accent_collection.php'):
		echo "<h1>Accent Collection - 1/4&quot; Frameless Glass Shower Door and Tub Enclosures</h1>\n";
		echo "<p>The Accent shower door is by far Agalite's most popular collection. If you are looking for exceptionally high quality and design built to last a lifetime,
		then the Accent door is your first choice.</p>\n";
		echo "<p>All swing and slider shower doors in the Accent Collection incorporate several design features that ensure an attractive, easy to clean 
		enclosure. Using the strongest method of fastening, the hardware is securely attached through holes in the glass, resulting in
		years of trouble-free operation.</p>\n";
	break;
	//// LOAD FRESCO COLLECTION copy
	case($filename=='fresco_collection.php'):
		echo "<h1>Fresco Collection - 3/16&quot; Fully Framed Glass Shower Door and Tub Enclosures</h1>\n";
		echo "<p>If you like the distinct look and feel of a metal frame to accentuate your bath fixtures, then the Fresco Collection is an excellent choice. This fully framed collection displays the beauty of glass, trimmed in your choice of finish. </p>\n";
		echo "<p>A variety of colors and finishes for the frame as well as numerous choices of glass, offer a perfect fit in your bath, no matter which accessories you choose.</p>\n";
	break;
	//// LOAD FRESCO COLLECTION copy
	case($filename=='vision_collection.php'):
		echo "<h1>Vision Collection - 3/16&quot; Semi-Frameless Glass Shower Door Enclosures</h1>\n";
		echo "<p>As a counterpart to the Fresco, the Vision Collection, with its distinctive looks, eliminates the metal framing around the doors by using 3/16&quot; thick glass with polished edges. Vision´s majestic looks are in class of its own.</p>\n";
		echo "<p>The Vision Collection offers the most options and flexibility of any shower door in its class. Durable, high quality aluminum is offered in a variety of different metal finishes or powder coated colors.</p>\n";	
	break;
	//// LOAD resouces copy
	case($filename=='resources.php'):
		echo "<h1>Resources</h1>\n";
		echo "<p>Welcome to the Agalite Resources page. A variety of useful information
		is availble for you. On this page you can download the following
		documents:</p>\n";
		echo "<div id='resourcesUL'>
			<ul>
			    <li>Agalite Brochures - <i>Collection Trifolds, Catalog, and EasyClean10 Glass Treatment Brochure</i></li>
			    <li>Installation Instructions - <i>Hardware, Shower Doors and Enclosures</i></li>
			    <li>Owner's Manuals - <i>EasyClean10 Glass Treatment, Hardware and Shower Doors</i></li>
			</ul>
		</div>";
		echo "<p>And finally, you can also learn about the best ways to care for
		and maintain your Agalite bath enclosure, EasyClean10 Glass Treatment and
		ShowerGuard glass options.</p>\n";
	break;
	case($filename=='dlr26780login.php?logout' || $filename=='dlr26780login.php' ):
		echo "<h1>Welcome To Agalite</h1>\n";
		echo "<p>Since your bath is a reflection of your style, selecting a distinctive shower enclosure or tub enclosure is paramount. 
		The timeless beauty of glass combined with Agalite's design simplicity creates an enclosure not only elegant, but also easy to 
		maintain. Almost any metal finish and type of glass can be combined to match your décor in a particularly stylish way. 
		Our commitment to provide luxurious quality that you can feel and see every time you use your bath is unwavering. Our 
		lifetime warranty on all of our glazed units is your assurance that we build \"beauty to last a lifetime.\"</p>\n";
	break;
	case($filename=='dealer_locator.php'):
		echo "<h1>Agalite Shower and Bath Enclosure Dealer Locator</h1>\n";
		echo "<p>The Agalite Dealer locator provides you with address and contact information, maps and
			driving instructions, and is your internet link to shower and bath enclosure dealer web pages. </p>\n";
		echo "<p>To find your nearest Agalite Dealer, please enter your information in the fields below and click the \"SEARCH\" button. </p>\n";
	break;
		case($filename=='agalite-shower-doors-glass.php'):
		echo "<h1>Shower Door Glass and Easy Clean Glass Options by Agalite</h1>\n";
		echo "<p>Agalite offers the widest selection of glass types in the industry. Upgrade standard clear glass to pattern glass, ShowerGuard&reg; glass, tinted glass or patterned glass types to accent your bathroom décor. </p>\n";
		echo "<h2>Do You Want Easy to Clean Shower Door Glass?</h2>\n";
		echo "<p>Check out Agalite’s Easy Clean glass options, which include ShowerGuard® glass and <a href='http://www.easyclean10.com' parent='_blank'>EasyClean10 glass treatment</a>. Each option allows your bathroom shower door glass to stay cleaner longer, makes the glass easier to clean and helps keep your glass shower enclosure looking like new.</p>\n";
	break;
	//// LOAD page title - SEM cmpaigns
	case ($filename==$urlBuilder || $filename==$gclid):
		echo "<h1>Welcome To Agalite Shower &amp; Bath Enclosures</h1>\n\n";
		//echo "<h1>Welcome To Agalite </h1>\n\n";
		echo "<p>Since your bath is a reflection of your style, selecting a distinctive shower enclosure, tub enclosure and hardware is paramount. 
		The timeless beauty of glass combined with Agalite's design simplicity creates an enclosure not only elegant, but also easy to maintain. 
		Almost any metal finish, shower door hardware, and type of glass can be combined to match your décor in a particularly stylish way. 
		Our commitment to provide luxurious quality that you can feel and see every time you use your bath is unwavering. 
		Our lifetime warranty on all of our glazed units is your assurance that we build \"beauty to last a lifetime.\".</p>\n";
	break;
	default:
	echo "<b>collection_copy.php File Error!<b>";
	
}

?>
