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

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($filename) {
	//// LOAD aboutus.php copy
	case ($filename=='aboutus.php'):
		echo "<h1>About Us</h1>";
		echo "<p>Agalite was started in 1952 and since then, has grown and blossomed into a premier manufacturer of shower doors 
                and bath enclosures. Today, Agalite is owned and operated by Hartung Glass Industries. Agalite operates manufacturing and distribution facilities that stretch from British 
                Columbia to Indiana. Current locations include Burnaby and Langley, British Columbia; Seattle, Washington; 
                Wilsonville, Oregon; Sacramento, Union City and Anaheim California; Pueblo, Colorado; South Bend, Indiana; and 
                Arlington, Texas.</p>";
            	echo "<p>Agalite shower doors are well known for the best quality and customer satisfaction. Each enclosure that leaves our 
                plant has been checked for quality and is backed by our exclusive, lifetime, hassle-free warranty.</p>";
	break;
	//// LOAD history.php copy
	case ($filename=='history.php'):
		echo "<h1>Agalite History</h1>";
		echo "<p>Agalite began manufacturing shower doors and patio doors in the early 1950's as Agalite Bronson. Since its founding, Agalite had grown and blossomed into a premier manufacturer of shower doors and bath enclosures. </p>
		<p>In 1977, Agalite Bronson was purchased from the Sierracin Corporation by Norman Heutmaker, owner of F.L. Hartung Glass and moved 
		the operations from Oakland, California to Hartung Glass's Seattle, Washington facility.  Agalite Bronson was then incorporated into 
		Hartung's own shower door company, Temperline, which was a manufacturing distributor for Work Right Products of California. 
		The \"Bronson\"of Agalite Bronson was dropped due to the popularity of the Agalite brand and the company name was amended to: 
		<em>Temperline, Mfg of Agalite Shower Doors</em>.  Eventually, the increased demand for Agalite Shower doors resulted in 
		Hartung discontinuing the Temperline distribution to focus entirely on the manufacturing of Agalite shower doors, and the 
		company name was changed to simply \"Agalite\".</p>";
		echo "<p>In 1983, Norman Heutmaker sold Hartung Glass Industries to Nick Sciola, our current owner and President.  In 1985, Hartung Glass 
		Industries moved to its current location in Tukwila, Washington.  In 1991, a new 88,000 sq/ft. building adjacent to Hartung's 
		building was built to house Agalite.</p>";
		echo "<p>Today, Hartung Glass Industries operates manufacturing and distribution facilities that stretch from British Columbia to Indiana.
		Current locations include Burnaby and Langley, British Columbia; Seattle, Washington; Wilsonville, Oregon; Sacramento, Union City 
		and Anaheim California; Pueblo, Colorado; South Bend, Indiana; Salt Lake City, Utah; and Arlington, Texas.</p>";
		echo "<p>The partnership with Hartung Glass Industries has proven to be very beneficial, as Agalite is able to manufacture its shower 
		doors in house, which eliminates the need to purchase glass from another fabricator. This unique ability to fabricate and temper 
		our own glass results in very short delivery cycles and the opportunity to manufacture and control all of the materials in a 
		shower enclosure, resulting in exceptional quality and design.</p>";
	break;	
	//// LOAD warranty.php copy
	case ($filename=='quality.php'):
		echo "<h1>Agalite Quality</h1>";
		echo "<p>Agalite is synonymous to Quality.   Why else would we offer a Lifetime Warranty on all products?</p>";
		echo "<p><img src='images/hinge-h1-sml.gif' alt='Estate Hinge' width='100' height='124' class='image-left' />Agalite has been designing and producing frameless shower doors since the 1950´s. This experience in design and manufacturing combined with continuous investment in research for new products and production technology yields the best door made.</p>";
		echo "<p>The best materials, technology and manufacturing processes are used in the construction of each Agalite shower and bath enclosure. Rest assured that Agalite doors, designed for a lifetime of use, will keep their promise year after year.</p>";
		echo "<p><img src='images/temper-sml.gif' alt='Tempering Furnace - Hartung Glass' width='200' height='150' class='image-right'/>Agalite´s materials are hand selected based on rigid standards. The finish and engineering of each glass, aluminum and hardware component will exceed your expectations for beauty, durability and function. </p>";
		echo "<p>With Agalite, you don't have to sacrifice creativity and individuality for quality. We offer more metal finishes and glass options than anyone. Besides receiving the best door made, you can be assured it will come in the options that you need to make your bathroom the ultimate expression of your individual taste and style.</p>";
		echo "<p>Unlike many other shower door companies, Agalite not only controls the manufacturing and fabrication of the hardware and frames, Agalite also controls the manufacturing and fabrication of the tempered glass. We are a division of Hartung Glass Industries, a national leader in glass fabrication and tempering. </p>";
		echo "<p>What this all adds up to is a Lifetime Warranty, the highest quality standards, design flexibility, in-house glass fabrication and the fact that your door is \"Built to Last a Lifetime\". We believe it so much that we made it part of our logo.</p>";
	break;
	//// LOAD warranty.php copy
	case ($filename=='warranty.php'):
		echo "<h1>Agalite Warranty</h1>";
		echo "<p><img src='images/_MG_7730CollectionsVision.jpg' class='image-left'/>When you purchase an Agalite Shower and Bath Enclosure you have selected the world’s finest. Ever since inventing the frameless shower door in the 1950s, Agalite has been known for its unequivocal quality. Agalite bath and shower enclosures are made of quality tempered glass, durable hardware, and the most finely-extruded, heavy-gauge aluminum to ensure a lifetime of virtually worry and trouble-free use. Over two million enclosures’ worth of experience gives us the confidence to say that you will enjoy your Agalite bath or shower enclosure for many years to come.</p>";
                echo "<p><img src='images/_MG_0720-A-coloroverlay-crop.jpg' align='left' class='image-right'/>Your participating Agalite Dealer, at its option, will repair or replace any part of your Agalite shower or tub enclosure found to be defective in material or workmanship, which will be supplied free of charge, FOB our factory or designated service center. This warranty covers parts only: shipping and replacement labor is not included.</p>";
                echo "<p>The Estate collection has a lifetime warranty on the glass and a 3-year, limited warranty on the hardware. The ClearShield glass treatment option is not covered under the Agalite Lifetime warranty. However it is covered under a 10-year ClearShield manufacturer’s warranty</p>";
                echo "<p>To activate our warranty, the purchaser must complete and forward the warranty registration card provided with the Agalite bath or shower enclosure within 30 days of purchase.</p>";
                echo "<p>To make a claim under the provisions of this warranty, simply contact your local Agalite dealer, Hartung Glass Industries, or Agalite Shower and Bath Enclosure.</p>";
	break;
	default:
	echo "<b>aboutus_copy.php File Error!<b>";
}

?>
