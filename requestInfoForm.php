<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Agalite Request For Information</title>
<link href="css/lami-master.css"  type="text/css" rel="stylesheet" />
<link type="text/css" href="development-bundle/themes/base/ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
<script language="JavaScript"  type="text/javascript">
//// Jquery JavaScript Datepicker Calander
	$(function() {
		//// #OrigPreDate = id value (id="OrigPreDate")of html input box.
		$("input[type='text']:first", document.forms[0]).focus();
		$("#DateSubmitted").datepicker({
			showButtonPanel: true,  
			showOn: 'button',
			buttonImage: 'img/calendar.gif',
			buttonImageOnly: true});
		
			
	});
	
	function validate(thisForm){		
		if (thisForm.firstName.value == "" ){
	    		window.alert("Please enter your first name!");
			thisForm.firstName.focus();
	    		return false;
	  	}
		if (thisForm.lastName.value == "" ){
	    		window.alert("Please enter your last name!");
			thisForm.lastName.focus();
	    		return false;
	  	}
		if (thisForm.cityName.value == "" ){
	    		window.alert("Please enter the name of the city you reside!");
			thisForm.companyName.focus();
	    		return false;
	  	}
		if (thisForm.stateName.value == "" ){
	    		window.alert("Please select the State/Provence in which you live!");
			thisForm.companyName.focus();
	    		return false;
	  	}
//		if (thisForm.DateSubmitted.value == "" ){
//	    		window.alert("Please enter today's date!");
//			thisForm.DateSubmitted.focus();
//	    		return false;
//	  	}		
		if (thisForm.senderEmail.value == "" ){
	   		 window.alert("Please enter your email address!");
			thisForm.senderEmail.focus();
	    		return false;
	  	}else {
			var emailexp = /.*\@.*\..*/;
			if (!emailexp.test(thisForm.senderEmail.value)) {
			      	window.alert("Invalid email address!\n\nPlease enter your correct email address!\n\nExample yourname@example.com");
				thisForm.senderEmail.focus();
			      	return false;
			}   
		}
		return true;	
	}

</script>
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
	margin:10px 0px 10px 0px;
	text-align:left;
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
</style>
<?php include 'includes/GoogleAnalytics.php' ?>
</head>
<body >
<div id="wrapper">
    <h2>Agalite Request For Information</h2>
    <p>Instructions: Please fill out <u>ALL</u> fields then click &quot;Submit&quot;. An E-mail will be sent to Agalite Shower and Bath Enclosures. Fields with astric (<span class="style1">*</span>) denotes a required field.</p>
    <form action="requestInfoEmail.php" method="post" onsubmit="return validate(this);">
        <table>
            <tr>
                <td width="100">First Name <span class="style1">*</span></td>
                <td><input type="text" name="firstName" tabindex="1" /></td>
            </tr>
            <tr>
                <td width="100">Last Name <span class="style1">*</td>
                <td><input type="text" name="lastName" tabindex="2" /></td>
            </tr>
            <tr>
                <td width="100">City<span class="style1">*</td>
                <td><input type="text" name="cityName" tabindex="3" /></td>
            </tr>
            <tr>
                <td width="100">State<span class="style1">*</td>
                <td><select name="stateName" id="wtbState" tabindex="4">
                        <option value="" selected="selected">Select a State</option>
                        <option value="AK">AK - Alaska</option>
                        <option value="AL">AL - Alabama</option>
                        <option value="AR">AR - Arkansas</option>
                        <option value="AZ">AZ - Arizona</option>
                        <option value="CA">CA - California</option>
                        <option value="CO">CO - Colorado</option>
                        <option value="CT">CT - Connecticut</option>
                        <option value="DC">DC - District of Columbia</option>
                        <option value="DE">DE - Delaware</option>
                        <option value="FL">FL - Florida</option>
                        <option value="GA">GA - Georgia</option>
                        <option value="HI">HI - Hawaii</option>
                        <option value="IA">IA - Iowa</option>
                        <option value="ID">ID - Idaho</option>
                        <option value="IL">IL - Illinois</option>
                        <option value="IN">IN - Indiana</option>
                        <option value="KS">KS - Kansas</option>
                        <option value="KY">KY - Kentucky</option>
                        <option value="LA">LA - Louisiana</option>
                        <option value="MA">MA - Massachusetts</option>
                        <option value="MD">MD - Maryland</option>
                        <option value="ME">ME - Maine</option>
                        <option value="MI">MI - Michigan</option>
                        <option value="MN">MN - Minnesota</option>
                        <option value="MO">MO - Missouri</option>
                        <option value="MS">MS - Mississippi</option>
                        <option value="MT">MT - Montana</option>
                        <option value="NC">NC - North Carolina</option>
                        <option value="ND">ND - North Dakota</option>
                        <option value="NE">NE - Nebraska</option>
                        <option value="NH">NH - New Hampshire</option>
                        <option value="NJ">NJ - New Jersey</option>
                        <option value="NM">NM - New Mexico</option>
                        <option value="NV">NV - Nevada</option>
                        <option value="NY">NY - New York</option>
                        <option value="OH">OH - Ohio</option>
                        <option value="OK">OK - Oklahoma</option>
                        <option value="OR">OR - Oregon</option>
                        <option value="PA">PA - Pennsylvania</option>
                        <option value="RI">RI - Rhode Island</option>
                        <option value="SC">SC - South Carolina</option>
                        <option value="SD">SD - South Dakota</option>
                        <option value="TN">TN - Tennessee</option>
                        <option value="TX">TX - Texas</option>
                        <option value="UT">UT - Utah</option>
                        <option value="VA">VA - Virginia</option>
                        <option value="VT">VT - Vermont</option>
                        <option value="WA">WA - Washington</option>
                        <option value="WI">WI - Wisconsin</option>
                        <option value="WV">WV - West Virginia</option>
                        <option value="WY">WY - Wyoming</option>
                        <option value="AB">AB - Alberta</option>
                        <option value="BC">BC - British Columbia</option>
                        <option value="MB">MB - Manitoba</option>
                        <option value="NB">NB - New Brunswick</option>
                        <option value="NL">NL - Newfoundland and Labrador</option>
                        <option value="NS">NS - Nova Scotia</option>
                        <option value="NT">NT - Northwest Territories</option>
                        <option value="NU">NU - Nunavut</option>
                        <option value="ON">ON - Ontario</option>
                        <option value="PE">PE - Prince Edward Island</option>
                        <option value="QC">QC - Quebec</option>
                        <option value="SK">SK - Saskatchewan</option>
                        <option value="YT">YT - Yukon</option>
                        <option value="Outside the US">Outside the US</option>
                    </select></td>
            </tr>
            <tr>
                <td width="100">Company Name <span class="style1"></td>
                <td><input type="text" name="companyName" tabindex="5" /></td>
            </tr>
            <tr>
                <td>Your E-mail <span class="style1">*</td>
                <td><input type="text" name = "senderEmail" tabindex="6"/></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name = "phone" tabindex="7"/></td>
            </tr>
            <tr>
                <td>Today's Date</td>
                <td><input type="text" name="date" value="<?php echo date('m/d/Y'); ?>" size="25" readonly="readonly"></td>
            </tr>
            <!--            <tr>
                <td>Date submitted</td>
                <td><input type="text" id="DateSubmitted" name="DateSubmitted" size="25" tabindex="6"></td>
            </tr>-->
            <tr>
                <td valign="top">Comments <span class="style1">*
                    </p></td>
                <td><textarea name="comments" cols="50" rows="10"  tabindex="8"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><input type="submit" value="Submit Request" name="submitForm" class="supreqsbmit" tabindex="8"/>
                    <input type="reset" value="Reset Form" name="submit2" class="supreqsbmit" tabindex="9"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
