<?php 
$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
//$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";
$url = !empty($query) ? "http://$host$self?$query" : "http://$host";
//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);

// Uncomment to show complete web page filename.... ie. http://www.agalite.com/index.php
//echo $filename; 

//Web URL Address VARIABLES

//// INTRANET
$webURL ="http://192.168.2.6";
$webURL1 ="http://192.168.2.6:16080";

//// WWW USA
$webURL2 ="http://agalite.com";
$webURL3 ="http://www.agalite.com";

/*$googleAnalytics = "<script type=\"text/javascript\">
var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
</script>
<script type=\"text/javascript\">
try {
var pageTracker = _gat._getTracker(\"UA-10236955-1\");
pageTracker._trackPageview();
} catch(err) {}</script>";*/

$googleAnalytics = "<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10236955-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";

//// Checks to see if web page  is equal to xxxx.php.  If true, prints collection specific menu on screen.
switch ($url) {
	case($url==$webURL OR $url==$webURL1):
		echo "\n<div style='color:#ffffff;'>GoogleAnalytics Off!</div>";
		//echo "$googleAnalytics";
	break;
	case($url==$webURL2 OR $url==$webURL3):
		echo "\n$googleAnalytics";
	break;
	case (preg_match("/\?gclid\=*/",$url, $matches)== 1):
		echo "\n$googleAnalytics";
	break;
	case (preg_match("/\?utm_source\=*/",$url, $matches)== 1):
		echo "\n$googleAnalytics";
	break;
	/* Default Code places Google Analytics code on page if an Google AdWord Click is used.*/
	default:
		echo "\n<div style='color:#ffffff;'>GoogleAnalytics Error/Off!</div>";
		
}
?>
