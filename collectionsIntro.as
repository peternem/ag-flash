////  XML MENU - linking main timeline to actionscript and XML data 
////  Author - Matt Peternell
////  Created - 101408
////  Revised - 101608  - Estate Zoom Movie Clip and button added
////  Revised - 101708  - Added BGImage load script, Pinstripes sprites, Glow filter, Title and Tag Line text fields and embeded fonts.
////  



package {
	import flash.display.MovieClip;
	import flash.display.Sprite;
	import flash.display.Shape;
	import flash.events.MouseEvent;
	import flash.text.TextField;
	import flash.text.TextFieldAutoSize;
	import flash.text.TextFormat;
	import flash.text.AntiAliasType;
	import flash.display.Loader;
	import flash.net.URLLoader;
	import flash.net.URLRequest;
	import flash.xml.XMLDocument;
	import flash.events.Event;
	import flash.errors.*;
	import flash.text.Font;
	import flash.net.*;
	import flash.text.*;
	import flash.filters.GlowFilter;
	import flash.filters.BitmapFilterQuality;
	import fl.transitions.Tween;
	import fl.transitions.easing.*;
	// import tweener
	import gs.*; 
	import gs.easing.*;


	public class collectionsIntro extends MovieClip {
		public var __menuList:XMLList;// Create an XML list to hold the buttons.
		public var __loader:URLLoader;// External file loader. 
		public var url:String = "images/Accent_Panorama1.jpg";//// Link to BG images
		public var urlRequest:URLRequest = new URLRequest(url);

		
		public function collectionsIntro() {
			//messageBox_txt.text="I have not been pressed."
			//click_btn.addEventListener(MouseEvent.MOUSE_DOWN,clicked);
			loadXML();
		}
		public function loadXML():void {
			__loader=new URLLoader;// Create a URL loader.
			__loader.addEventListener(Event.COMPLETE,onXMLLoaded);// Attach a listener to the loader.
			__loader.load(new URLRequest("Flash-XML/collections-menu.xml"));// Load the xml file.
		}
		public function onXMLLoaded(event:Event):void {

			// Put some error catching in, just in case the XML is malformed.
			try {
				var menuXML:XML=new XML(__loader.data);// Load the data into the XML object.
				__menuList=menuXML.button;// Create a list of the buttons.
				backgroundImg();//// load backgroundImg
				drawMenu();// Now that the XML is loaded and our list is made, create the menu.
				pinstripe();
				CollectionName();
				trace(menuXML.button);
			} catch (error:Error) {
				// Display an error message.
				var errorMessage:TextField=new TextField;
				errorMessage.autoSize=TextFieldAutoSize.LEFT;
				errorMessage.textColor=0xFF0000;
				errorMessage.x = 10;
				errorMessage.y = 10;
				errorMessage.text=error.message;
				//errorMessage.bold = true;
				addChild(errorMessage);
				return;
			}
		}
		public function CollectionName():void {
			
			// Collection Name text format
			var myFont1:Font = new MyFont();
			var myTextFormat1:TextFormat = new TextFormat();
			myTextFormat1.font = myFont1.fontName;
			myTextFormat1.size = 26;
			myTextFormat1.color = 0xffffff;
			myTextFormat1.letterSpacing = 0;

			// Tag Line text format
			var myFont2:Font = new MyFont();
			var myTextFormat2:TextFormat = new TextFormat();
			myTextFormat2.font = myFont2.fontName;
			myTextFormat2.size = 14;
			myTextFormat2.color = 0xffffff;
			//myTextFormat2.letterSpacing = .75;

			// Apply the glow filter to the cross shape.
			var glow:GlowFilter = new GlowFilter();
			glow.color = 0x000000;
			glow.alpha = .44;
			glow.blurX = 3;
			glow.blurY = 3;
			glow.quality = BitmapFilterQuality.HIGH;


			var tf:TextField = new TextField();
			//tf.autoSize = TextFieldAutoSize.LEFT;
			tf.background = false;
			tf.border = false;
			tf.width = 500;
			tf.x = 12;
			tf.y = 40;
			tf.text = "The Collections";
			tf.embedFonts=true;
			tf.antiAliasType=AntiAliasType.ADVANCED;
			tf.setTextFormat(myTextFormat1);
			tf.filters = [glow];
			addChild(tf);

			var tf2:TextField = new TextField();
			//tf2.autoSize = TextFieldAutoSize.LEFT;
			tf2.background = false;
			tf2.border = false;
			tf2.width = 600;
			tf2.x = 14;
			tf2.y = 70;
			tf2.text = "Agalite Offers Four Different Collections To Complement Any Bathroom Design.";
			tf2.embedFonts=true;
			tf2.antiAliasType=AntiAliasType.ADVANCED;
			tf2.setTextFormat(myTextFormat2);
			tf2.filters = [glow];
			addChild(tf2);
		}
		public function backgroundImg():void {
			////// Load Bground Image
			var loaderBgImg:Loader = new Loader();
			loaderBgImg.load(urlRequest);
			loaderBgImg.x = 0;
			loaderBgImg.y = 0;
			addChild(loaderBgImg);

		}
		public function pinstripe():void {

			// After menu has been populated, fill empty space on screen with fill box(s).
			var pinstripeTop:Sprite=new Sprite;
			//pinstripeTop.graphics.lineStyle(0,0x000000,100);
			pinstripeTop.graphics.beginFill(0xE6DEC8);
			pinstripeTop.graphics.drawRect(0,0,800,6);
			pinstripeTop.graphics.endFill();
			pinstripeTop.name="up";
			pinstripeTop.alpha=1;
			addChild(pinstripeTop);

			var pinstripeBot:Sprite=new Sprite;
			//pinstripeBot.graphics.lineStyle(0,0x000000,100);
			pinstripeBot.graphics.beginFill(0xE6DEC8);
			pinstripeBot.graphics.drawRect(0,543,800,6);
			pinstripeBot.graphics.endFill();
			pinstripeBot.name="up";
			pinstripeBot.alpha=1;
			addChild(pinstripeBot);
		}
	/**
		 * Draw the menu. 
		 */

		public function drawMenu():void {

			// This variable will hold the x position of the next button in the menu.
			var xPos:Number=0;
			var p:XML;
			
			// Create a holder that will contain the menu.
			var menuHolder:Sprite=new Sprite;
			menuHolder.x=0; // Postion The Menu.
			menuHolder.y=471;
			addChild(menuHolder); // Add the holder to the stage.

			// Create text formatting for the text fields in the menu.
			var myFont:Font=new MyFont;
			var format:TextFormat = new TextFormat;
			format.font = myFont.fontName;
			format.color = 0x3E3C36;
			format.size = 14;
			format.align = "center";
			format.rightMargin= 5;
			format.underline = true;
			
			var subTxtformat:TextFormat = new TextFormat;
			subTxtformat.font = myFont.fontName;
			subTxtformat.color = 0x3E3C36;
			subTxtformat.size = 11;
			subTxtformat.align = "center";
			subTxtformat.rightMargin = 5;
			subTxtformat.leftMargin = 5;
			
			var subTxtOverformat:TextFormat = new TextFormat;
			subTxtOverformat.font = myFont.fontName;
			subTxtOverformat.color = 0xffffff;
			subTxtOverformat.size = 11;
			subTxtOverformat.align = "center";
			subTxtOverformat.rightMargin = 5;
			subTxtOverformat.leftMargin = 5;
		
			var format2:TextFormat=new TextFormat;
			format2.font=myFont.fontName;
			format2.color = 0xffffff;
			format2.size = 14;
			format2.align ="center";
			format2.rightMargin= 0;
			format2.underline = true;

			var format3:TextFormat=new TextFormat;
			format3.font=myFont.fontName;
			format3.color = 0xcccfff;
			format3.size = 14;
			format3.align ="center";
			format3.rightMargin= 0;
			format3.underline = true;

			// Loop through the list and create each button in the list.
			var count:int=0;

			for each (p in __menuList) {

				// Create the button.
				var button:Sprite=new Sprite();
				button.name=__menuList[count].@frameNumber;
				button.mouseChildren=false;// Disable the mouse events of all the objects within the button.
				button.buttonMode=true;// Make the sprite behave as a button.

				// Create the label for the down button state.
				var up_txt:TextField=new TextField;
				up_txt.background=false;
				up_txt.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
				up_txt.height = __menuList[count].@Bheight;///// Button and TXT Field width based off of "bwidth" xml data
				up_txt.wordWrap=true;
				up_txt.embedFonts=true;
				up_txt.antiAliasType=AntiAliasType.ADVANCED;
				up_txt.defaultTextFormat=format;
				up_txt.htmlText =__menuList[count].@Label;
				up_txt.alpha = 1;
				up_txt.name="upTEXT";
				up_txt.y = 3;
				
				
				var SubUp_txt:TextField=new TextField;
				SubUp_txt.background=false;
				SubUp_txt.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
				SubUp_txt.height =48;///// Button and TXT Field width based off of "bwidth" xml data
				SubUp_txt.wordWrap=true;
				SubUp_txt.embedFonts=true;
				SubUp_txt.antiAliasType=AntiAliasType.ADVANCED;
				SubUp_txt.defaultTextFormat=subTxtformat;
				SubUp_txt.htmlText =__menuList[count].@SubLabel;
				SubUp_txt.alpha = 1;
				SubUp_txt.name="SubupTEXT";
				SubUp_txt.y = 20;
				
				var SubOver_txt:TextField=new TextField;
				SubOver_txt.background=false;
				SubOver_txt.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
				SubOver_txt.height =48;///// Button and TXT Field width based off of "bwidth" xml data
				SubOver_txt.wordWrap=true;
				SubOver_txt.embedFonts=true;
				SubOver_txt.antiAliasType=AntiAliasType.ADVANCED;
				SubOver_txt.defaultTextFormat=subTxtOverformat;
				SubOver_txt.htmlText =__menuList[count].@SubLabel;
				SubOver_txt.alpha = 1;
				SubOver_txt.name="SubOverTEXT";

				var over_txt:TextField = new TextField;
				over_txt.background = false;
				over_txt.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
				over_txt.height = __menuList[count].@Bheight;///// Button and TXT Field width based off of "bwidth" xml data
				over_txt.multiline=false;
				over_txt.wordWrap=true;
				over_txt.embedFonts=true;
				over_txt.antiAliasType=AntiAliasType.ADVANCED;
				over_txt.defaultTextFormat = format2;
				over_txt.text=__menuList[count].@Label;
				over_txt.alpha = 1;
				over_txt.name="overTEXT";

				var down_txt:TextField = new TextField;
				down_txt.background = false;
				down_txt.width =  __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
				down_txt.height = __menuList[count].@Bheight;///// Button and TXT Field width based off of "bwidth" xml data
				down_txt.multiline=false;
				down_txt.wordWrap=true;
				down_txt.embedFonts=true;
				down_txt.antiAliasType=AntiAliasType.ADVANCED;
				down_txt.defaultTextFormat = format3;
				down_txt.text=__menuList[count].@Label;
				down_txt.alpha = 1;
				down_txt.name="downTEXT";

				// Create a up state for the button.
				var up:Sprite=new Sprite();
				up.graphics.lineStyle(1,0x000000,100);
				up.graphics.beginFill(0xCAC3B0);
				up.graphics.drawRect(0,0,__menuList[count].@Bwidth,__menuList[count].@Bheight);
				up.graphics.endFill();
				up.name = "up";
				up.alpha = 1;
				up.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data

				//TweenMax.to(up, .2, {bevelFilter:{blurX:2, blurY:2, strength:2, angle:45, distance:3}});

				// Create a over state for the button.
				var over:Sprite=new Sprite();
				over.graphics.lineStyle(1,0x000000,100);
				over.graphics.beginFill(0x7D796D);
				over.graphics.drawRect(0,0,__menuList[count].@Bwidth,__menuList[count].@Bheight);
				over.alpha =.85;
				over.graphics.endFill();
				over.name="over";
				over.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
				//TweenMax.to(over, .2, {bevelFilter:{blurX:3, blurY:3, strength:2, angle:135, distance:2}});


				var down:Sprite=new Sprite();
				down.buttonMode = true;
				down.graphics.lineStyle(1,0x000000,100);
				down.graphics.beginFill(0x000000);
				down.graphics.drawRect(0,0,__menuList[count].@Bwidth,__menuList[count].@Bheight);
				down.graphics.endFill();
				down.alpha = 1;
				down.useHandCursor = true;
				down.name="down";
				down.width = __menuList[count].@Bwidth;///// Button and TXT Field width based off of "bwidth" xml data
			
				// Adder the states and label to the button.
				button.addChild(up);
				button.addChild(up_txt);
				button.addChild(SubUp_txt);
				button.addChild(over);
				button.addChild(over_txt)
				button.addChild(SubOver_txt);
				button.addChild(down);
				button.addChild(down_txt);

				// Position the text in the center of the button.
				up_txt.x=button.width / 2 - up_txt.width / 2;
				up_txt.y=button.height / 2 - up_txt.height / 2;
				SubUp_txt.y=22;
				SubOver_txt.y=22;
				over_txt.x=button.width / 2 - over_txt.width / 2;
				over_txt.y=button.height / 2 - over_txt.height / 2;
				down_txt.x=button.width / 2 - down_txt.width / 2;
				down_txt.y=button.height / 2 - down_txt.height / 2;

				// Add mouse events to the button.
				button.addEventListener(MouseEvent.MOUSE_OVER,displayActiveState);
				button.addEventListener(MouseEvent.MOUSE_DOWN,displayDownState);
				button.addEventListener(MouseEvent.MOUSE_OUT,displayInactiveState);
				button.addEventListener(MouseEvent.CLICK,displayMessage);

				// Add the button to the holder.
				menuHolder.addChild(button);

				// Position the button.
				button.x=xPos;

				// Increase the x position for the next button.
				xPos+= button.width + 2;

				// Hide the over state of the button.
				over_txt.alpha = 0;// Hide the overTEXT state of the button
				down_txt.alpha = 0;// Hide the overTEXT state of the button
				SubOver_txt.alpha = 0;
				over.alpha = 0;// Hide the Over state of the button
				down.alpha = 0;// Hide the down state of the button

				// Increase the count.
				count++;
			}
		}
		// HIDE/Show the over state of the button. 
		private function displayDownState(event:MouseEvent):void {
			event.currentTarget.getChildByName("up").alpha=0;
			event.currentTarget.getChildByName("upTEXT").alpha=0;//Hide the upText state of the button.
			event.currentTarget.getChildByName("SubupTEXT").alpha=0;//Hide the upText state of the button.
			event.currentTarget.getChildByName("over").alpha=0;
			event.currentTarget.getChildByName("overTEXT").alpha=.50;//Hide the overText state of the button.
			event.currentTarget.getChildByName("down").alpha=.50;
			event.currentTarget.getChildByName("downTEXT").alpha=.50;//Hide the overText state of the button.
		}
		private function displayActiveState(event:MouseEvent):void {
			event.currentTarget.getChildByName("up").alpha=0;
			event.currentTarget.getChildByName("upTEXT").alpha=0;//Hide the upText state of the button.
			event.currentTarget.getChildByName("over").alpha=.75;
			event.currentTarget.getChildByName("overTEXT").alpha=1;//Hide the overText state of the button.
			event.currentTarget.getChildByName("SubOverTEXT").alpha=1;//Hide the Down state of the button.
			event.currentTarget.getChildByName("down").alpha=0;
			event.currentTarget.getChildByName("downTEXT").alpha=0;//Hide the overText state of the button.
		}
		private function displayInactiveState(event:MouseEvent):void {
			event.currentTarget.getChildByName("up").alpha=1;//Hide the Up state of the button.
			event.currentTarget.getChildByName("upTEXT").alpha=1;//Hide the Down state of the button.
			event.currentTarget.getChildByName("SubupTEXT").alpha=1;//Hide the upText state of the button.
			event.currentTarget.getChildByName("over").alpha=0;//Hide the Over state of the button.
			event.currentTarget.getChildByName("overTEXT").alpha=0;//Hide the Down state of the button.
			event.currentTarget.getChildByName("SubOverTEXT").alpha=0;//Hide the Down state of the button.
			event.currentTarget.getChildByName("down").alpha=0;//Hide the Down state of the button
			event.currentTarget.getChildByName("downTEXT").alpha=0;//Hide the overText state of the button.
		}
		////*** Display a message in the Output window. */
		public function displayMessage(event:MouseEvent):void {
			//trace(event.currentTarget.name);// Output the name of the clicked button.
			gotoAndStop(event.currentTarget.name);
		}
	}
}