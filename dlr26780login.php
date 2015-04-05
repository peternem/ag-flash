<?php
/*// Your private infomation
$username = "agalite";
$password = "accent";
$redirect_file_name = "dealer206276tools.php";




//// Bad Login
if (!isset ($_SERVER['PHP_AUTH_USER'])){
	header("WWW-Authenticate: Basic realm=\"Dealer Tools\"");
	header("HTTP/1.0 401 Unauthorized");
	include 'includes/badLogin.php'; 
	exit;
}
//// Good Login
else {
	
	if (($_SERVER['PHP_AUTH_USER']== 'agalite') && ($_SERVER['PHP_AUTH_PW']== 'accent')){
	header("Location: $redirect_file_name");
	}
	//// Bad Login if password entered incorrectly.
	else {
		header("WWW-Authenticate: Basic realm=\"Dealer Tools\"");
		header("HTTP/1.0 401 Unauthorized");
		include 'includes/badLogin.php'; 
		exit;
		}
}*/
// Your private infomation
$username = "agalite";
$password = "accent";
$redirect_file_name = "dealer206276tools.php";

//// Bad Login
if (!isset ($_SERVER['PHP_AUTH_USER'])){
	header("WWW-Authenticate: Basic realm=\"Agalite Dealer Tools\"");
	header("HTTP/1.0 401 Unauthorized");
	include 'includes/badLogin.php';  
	exit;
}
//// Good Login
else {
	// split the user/pass parts
	list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':' , base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));

	if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){
	header("Location: $redirect_file_name");
	}
	//// Bad Login if password entered incorrectly.
	else {
		header("WWW-Authenticate: Basic realm=\"Agalite Dealer Tools\"");
		header("HTTP/1.0 401 Unauthorized");
		include 'includes/badLogin.php'; 
		exit;
		}
}

?>
