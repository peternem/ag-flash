// JavaScript Document
//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

////////////////////////////////////////////////////////////
//// Global Variables - Based on <DIV> "id" attributes  ////
////////////////////////////////////////////////////////////

var popup = ("#popup_DlrLocator, #popup_priceBook, #popup_LogoArtwork, #popup_mediaKit, #popup_forms, #popup_techDocs, #popup_hiResImages");
var closePopup =("#popup_DlrLocator_Close, #popup_priceBook_Close, #popup_LogoArtwork_Close, #popup_mediaKit_Close, #popup_forms_Close, #popup_techDocs_Close, #popup_hiResImages_Close");
var bgroundPopup = ("#backgroundPopup");
var fadeInPopup = ("fast"); 


////LOADS DEALER LOCATOR POPUP!

function loadPopup(){
//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_DlrLocator, ").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}


////LOADS HI_Res Images POPUP!

function loadPopup2(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_LogoArtwork").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}


////LOADS Media KIT POPUP!

function loadPopup3(){
//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_mediaKit").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}

////LOADS FORMS POPUP!

function loadPopup4(){
//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_forms").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}

////LOADS TECH DOCS POPUP!

function loadPopup5(){
//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_techDocs").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}

////LOADS HiRes Images POPUP!

function loadPopup6(){
//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_hiResImages").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}

////LOADS priceBook POPUP!

function loadPopup7(){
//loads popup only if it is disabled
	if(popupStatus==0){
		$(bgroundPopup).css({
		"opacity": "0.4"
	});
	$(bgroundPopup).fadeIn(fadeInPopup);
	$("#popup_priceBook").fadeIn(fadeInPopup);
	popupStatus = 1;
	}
}


////////////////////////////////////////////////
//// GLOBAL disabling POPUP FUNCTION ////
////////////////////////////////////////////////

function disablePopup(){
	//disables popup only if it is enabled
	if(popupStatus==1){
		$(bgroundPopup).fadeOut(fadeInPopup);
		$(popup).fadeOut(fadeInPopup);
		popupStatus = 0;
	}
}

////////////////////////////////////////////////
//// GLOBAL CENTER POPUP ON SCREEN FUNCTION ////
////////////////////////////////////////////////

function centerPopup(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $(popup).height();
	var popupWidth = $(popup).width();
	
	//centering
	$(popup).css({
	"position": "absolute",//"top": windowHeight/2-popupHeight/2,
	"top": 50,
	"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	$(bgroundPopup).css({
	"height": windowHeight
	});
}


$(document).ready(function(){


//LOADING Dealer Tools POPUP

//Click the button event!
	$("#button").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});
	
	
//LOADING HI_Res POPUP

//Click the button event!
	$("#button-logoArtwork").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup2();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});

//LOADING Media Kit POPUP
	//Click the button event!
	$("#button-mediaKit").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup3();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});
	

//LOADING FORMS POPUP

//Click the button event!
	$("#button-forms").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup4();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});

//LOADING Tech Docs POPUP
	//Click the button event!
	$("#button-techDocs").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup5();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});
	
//LOADING HiRes Images POPUP
	//Click the button event!
	$("#button-hiResImages").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup6();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});

//LOADING Pricebook Images POPUP
	//Click the button event!
	$("#button-priceBook").click(function(){
	//centering with css
	centerPopup();
	//load popup
	loadPopup7();
	});
	//Click out event!
	$(bgroundPopup).click(function(){
	disablePopup();
	});


///////////////////////////////
//// GLOBAL CLOSE FUNCTION ////
///////////////////////////////


//CLOSING POPUP 
	//Click the x event!
	$(closePopup).click(function(){
		disablePopup();
	});
//CLOSING BLACK BACGROUND POPUP 
	//Click out event!
	$(bgroundPopup).click(function(){
		disablePopup();
	});


});



