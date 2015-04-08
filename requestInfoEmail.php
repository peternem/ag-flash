<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Confirmation - Agalite Request For Information</title>
<link href="css/lami-master.css"  type="text/css" rel="stylesheet" />
<style>
body {
	FONT-SIZE: 12px;
	COLOR: #000000;
	FONT-FAMILY:  arial, helvetica, sans-serif;
	background-color:#3e3c36;/*#0074D9*/
}
#wrapper {
	margin: 10px auto auto;
	text-align: center;
	/*border:#00FF00 1px solid;*/
	width:560px;
	font:Geneva, Arial, Helvetica, sans-serif;
	color:#FFFFFF;
	font-weight:bold;
}

p {
	margin:10px 0px 10px 0px; text-align:left; 
}

table {
	text-align:center;
	padding:0px;
	width:100%;
}

td {
	text-align:left;
}

h2 {
	text-align:left;
	margin:10px 0px 10px 0px;
	font:Geneva, Arial, Helvetica, sans-serif;
	color:#FFFFFF;
	font-weight:bold;
}

.style1 {
	color: #FFFF00;
	font-weight:bold;
}

#reqForm_btn {
	background-color: #e6dec8;
	border:#333333 1px solid;
	padding: 3px;
	
}

#reqForm_btn:hover {
	background-color:#CCCCCC;
	border: #999999 1px solid;
}
</style>
<?php include 'includes/GoogleAnalytics.php' ?>
</head>
<body>
<div id="wrapper">
<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$cityName=$_POST['cityName'];
$stateName=$_POST['stateName'];
$companyName=$_POST['companyName'];
$senderEmail=$_POST['senderEmail'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$comments=$_POST['comments'];

$Cc="richp@constructioncreative.com, tgenzale@hartung-glass.com, tsulock@hartung-glass.com";
$to="pueblo@hartung-glass.com";
$headers = "From: $senderEmail"."\r\n"."CC: $Cc"; 
//$headers = "From: $senderEmail\r\n";
//$headers .= "CC: $senderEmail\r\n"; 
$message="$firstName $lastName just completed the Agalite Online Request for Information form.\n\n 
First name: $firstName\n\n
Last Name: $lastName\n\n
City: $cityName\n\n
State: $stateName\n\n
Company: $companyName\n\n
Sender E-mail address: $senderEmail\n\n
Phone Number: $phone\n\n
Date Submitted: $date\n\n
Comments: \n$comments";
if (!isset($_POST['submitForm'])){
	echo "submit button not clicked and Form not submitted!";
} else {
	echo "The Agalite \"Request Information\" Form has been submitted!"; 
	if(mail($to, "The Agalite.com Request Information Form",$message,$headers)) {
		echo "<h2>Agalite Request For Information</h2>\n";
		echo "<p>Thanks for requesting infotmation about Lami Glass. The following information was submitted to Agalite:</p>\n";
		echo "<p style='margin:10px 40px 10px 40px; font:Geneva, Arial, Helvetica, sans-serif; color:#FFFFFF; font-weight:bold;' >
			First name: \n$firstName<br>
			Last Name: \n$lastName<br>
			City: \n$cityName<br>
			State: \n$stateName<br>
			Company: \n$companyName<br>
			Sender E-mail address: \n$senderEmail<br>
			Phone Number: \n$phone<br>
			Date Submitted: \n$date<br><br>
			Comments:<br> \n$comments</p>
			<br>\n";
			
		echo "<p>To return to the Agalite website. Please click the \"Close This Window\" button 
			to return to the Lami website.</p>\n";
		echo "<div align='left'><a href='javascript: self.close ()' id='reqForm_btn'><span>Close this Window</span></a></div></div>";
	} else {
	echo "There was a problem sending the mail. Please check that you filled in the form correctly.";
	}
}	


?>
</div>

</body>
</html>
