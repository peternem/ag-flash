////  XML MENU - linking main timeline to actionscript and XML data 
////  Author - Matt Peternell
////  Created - 101408
////  Revised - 101608  - Estate Zoom Movie Clip and button added
////  Revised - 101708  - Added BGImage load script, Pinstripes sprites, Glow filter, Title and Tag Line text fields and embeded fonts.
////  


package {

	import flash.display.Sprite;
	import flash.display.MovieClip;
	import flash.events.MouseEvent;
	import flash.text.TextField;
	import flash.text.TextFieldAutoSize;
	import flash.text.TextFormat;
	import flash.text.AntiAliasType;
	import flash.net.URLLoader;
	import flash.net.URLRequest;
	import flash.display.Loader;
	import flash.xml.XMLDocument;
	import flash.events.Event;
	import flash.errors.*;
	import flash.text.Font;
	import flash.net.*;
	import flash.filters.GlowFilter;
	import flash.filters.BitmapFilterQuality;

	import flash.utils.Timer;
    import flash.events.TimerEvent;


	public class indexIntroMenuXML extends Sprite {

		private var __menuList:XMLList;// Create an XML list to hold the buttons.
		private var __loader:URLLoader;// External file loader.
		public var url:String = "images/HG102307_0005-v2.jpg";//// Link to BG images
		public var urlRequest:URLRequest = new URLRequest(url);

		/**
		 * The constructor. This method is fired automatically when the class is instantiated. 
		 */
		public function indexIntroMenuXML():void {
			loadXML();
		}
		/**
		 * Load the XML. 
		 */

		private function loadXML():void {

			// Create a URL loader.
			__loader=new URLLoader  ;

			// Attach a listener to the loader.
			__loader.addEventListener(Event.COMPLETE,onXMLLoaded);

			// Load the xml file.
			__loader.load(new URLRequest("Flash-XML/index-menu.xml"));
		}
		/**
		 * Called when the XML has been loaded.
		 * @param   event   The event that called this method.  
		 */
		private function onXMLLoaded(event:Event):void {

			// Put some error catching in, just in case the XML is malformed.
			try {

				// Load the data into the XML object.
				var menuXML:XML=new XML(__loader.data);
				//TimerExample();
				__menuList=menuXML.button;// Create a list of the buttons.
				backgroundImg();//// load backgroundImg
				//drawMenu(); // Now that the XML is loaded and our list is made, create the menu.
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
			tf.text = "Elegance, Style, Quality";
			tf.embedFonts=true;
			tf.antiAliasType=AntiAliasType.ADVANCED;
			tf.setTextFormat(myTextFormat1);
			tf.filters = [glow];
			addChild(tf);

			var tf2:TextField = new TextField();
			//tf2.autoSize = TextFieldAutoSize.LEFT;
			tf2.background = false;
			tf2.border = false;
			tf2.width = 500;
			tf2.x = 14;
			tf2.y = 70;
			tf2.text = "Agalite Shower Doors Are The Focal Point Of Bathroom Design.";
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
        public function TimerExample() {
            var myTimer:Timer = new Timer(1000, 1);
            myTimer.addEventListener("timer", timerHandler);
            myTimer.start();
			
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
		private function drawMenu():void {

			// This variable will hold the x position of the next button in the menu.
			var xPos:Number=0;
			var p:XML;
			// Create a holder that will contain the menu.
			var menuHolder:Sprite=new Sprite;

			// Add the holder to the stage.
			addChild(menuHolder);

			// Create text formatting for the text fields in the menu.
			var myFont:Font=new MyFont;
			var format:TextFormat=new TextFormat;
			format.font=myFont.fontName;
			format.color=0x3E3C36;
			format.size=12;
			format.align="center";


			var format2:TextFormat=new TextFormat;
			format2.font=myFont.fontName;
			format2.color=0xffffff;
			format2.size=12;
			format2.align="center";

			// Loop through the list and create each button in the list.
			var count:int=0;

			for each (p in __menuList) {

				// Create the button.
				var button:Sprite=new Sprite();
				//button.name="buttonXX" + count;
				button.name=__menuList[count].@href;
				button.mouseChildren=false;// Disable the mouse events of all the objects within the button.
				button.buttonMode=true;// Make the sprite behave as a button.

				// Create the label for the down button state.
				var up_txt:TextField=new TextField;
				up_txt.background=false;
				up_txt.width=80;
				up_txt.multiline=false;
				up_txt.wordWrap=true;
				up_txt.embedFonts=true;
				up_txt.antiAliasType=AntiAliasType.ADVANCED;
				up_txt.defaultTextFormat=format;
				//up_txt.text=__menuList[count].text();
				up_txt.text=__menuList[count].@Label;
				//trace(__menuList[count].@href);
				up_txt.alpha = 1;
				up_txt.name="upTEXT";

				var over_txt:TextField = new TextField;
				over_txt.background = false;
				over_txt.width = 80;
				over_txt.multiline=false;
				over_txt.wordWrap=true;
				over_txt.embedFonts=true;
				over_txt.antiAliasType=AntiAliasType.ADVANCED;
				over_txt.defaultTextFormat = format2;
				over_txt.text=__menuList[count].@Label;
				over_txt.alpha = 1;
				over_txt.name="overTEXT";


				// Create a up state for the button.
				var up:Sprite=new Sprite();
				up.graphics.lineStyle(1,0x000000,100);
				up.graphics.beginFill(0xCAC3B0);
				up.graphics.drawRect(0,0,130.1,32);
				up.graphics.endFill();
				up.name = "up";
				up.alpha = 1;

				// Create a over state for the button.
				var over:Sprite=new Sprite();
				over.graphics.lineStyle(1,0x000000,100);
				over.graphics.beginFill(0x7D796D);
				over.graphics.drawRect(0,0,130.1,32);
				over.alpha =.85;
				over.graphics.endFill();
				over.name="over";

				var down:Sprite=new Sprite();
				down.buttonMode = true;
				down.graphics.lineStyle(1,0x000000,100);
				down.graphics.beginFill(0x000000);
				down.graphics.drawRect(0,0,130.1,32);
				down.graphics.endFill();
				down.alpha = 1;
				down.useHandCursor = true;
				down.name="down";

				// Adder the states and label to the button.
				button.addChild(up);
				button.addChild(up_txt);
				button.addChild(over);
				button.addChild(over_txt);
				button.addChild(down);

				// Position the text in the center of the button.
				up_txt.x=button.width / 2 - up_txt.width / 2;
				up_txt.y=button.height / 2 - up_txt.height / 2;
				over_txt.x=button.width / 2 - over_txt.width / 2;
				over_txt.y=button.height / 2 - over_txt.height / 2;

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
				over.alpha = 0;// Hide the Over state of the button
				down.alpha = 0;// Hide the down state of the button

				// Increase the count.
				count++;
			}
			// Postion The Menu.
			menuHolder.x=1;
			menuHolder.y=507;

			// After menu has been populated, fill empty space on screen with fill box(s).
			var ExtraBox:Sprite=new Sprite;
			ExtraBox.graphics.lineStyle(1,0x000000,100);
			ExtraBox.graphics.beginFill(0xCAC3B0);
			ExtraBox.graphics.drawRect(532,507,132,32);
			ExtraBox.graphics.endFill();
			ExtraBox.name="up";
			ExtraBox.alpha=1;
			addChild(ExtraBox);

		}
		// HIDE/Show the over state of the button. 
		function displayDownState(event:MouseEvent):void {
			event.currentTarget.getChildByName("up").alpha=0;
			event.currentTarget.getChildByName("upTEXT").alpha=0;//Hide the upText state of the button.
			event.currentTarget.getChildByName("over").alpha=0;
			event.currentTarget.getChildByName("overTEXT").alpha=.50;//Hide the overText state of the button.
			event.currentTarget.getChildByName("down").alpha=.50;
		}
		function displayActiveState(event:MouseEvent):void {
			event.currentTarget.getChildByName("up").alpha=0;
			event.currentTarget.getChildByName("upTEXT").alpha=0;//Hide the upText state of the button.
			event.currentTarget.getChildByName("over").alpha=.75;
			event.currentTarget.getChildByName("overTEXT").alpha=1;//Hide the overText state of the button.
			event.currentTarget.getChildByName("down").alpha=0;
		}
		function displayInactiveState(event:MouseEvent):void {
			event.currentTarget.getChildByName("up").alpha=1;//Hide the Up state of the button.
			event.currentTarget.getChildByName("upTEXT").alpha=1;//Hide the Down state of the button.
			event.currentTarget.getChildByName("over").alpha=0;//Hide the Over state of the button.
			event.currentTarget.getChildByName("overTEXT").alpha=0;//Hide the Down state of the button.
			event.currentTarget.getChildByName("down").alpha=0;//Hide the Down state of the button.

		}

		/*** Display a message in the Output window. */
		private function displayMessage(event:MouseEvent):void {
			// Output the name of the clicked button.
			//trace(event.currentTarget.name);
			//trace(event.currentTarget.name);
			navigateToURL(new URLRequest(event.currentTarget.name), "_parent");

		}
	}
}