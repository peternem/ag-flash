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
	import fl.controls.Button;
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
	import com.agalite.PopUp;

	public class hardwareStandardHinge extends MovieClip {


		public function hardwareStandardHinge() {
			BoxDpull();
			BoxWallMount();
			CopyText();
			backgroundImg();
			closebtn();
			
		}
		private function backgroundImg():void {
			var myPopUp:PopUp = new PopUp();
			myPopUp.x = 0;
			myPopUp.y = 0;
			addChildAt(myPopUp,0);
		}
		public function CopyText():void {
			var myFont1:Font = new MyFont();
			var myTextFormat1:TextFormat = new TextFormat();
			myTextFormat1.font = myFont1.fontName;
			myTextFormat1.color = 0xffffff;
			myTextFormat1.size = 18;

			var tf:TextField = new TextField();
			//tf.autoSize = TextFieldAutoSize.LEFT;
			tf.background = false;
			tf.border = false;
			tf.width = 500;
			tf.x = 6;
			tf.y = 2;
			tf.text = "Standard Hinge Options";
			tf.embedFonts=true;
			tf.antiAliasType=AntiAliasType.ADVANCED;
			tf.setTextFormat(myTextFormat1);
			addChild(tf);
		}
		private function closebtn():void {

			var myFont:Font = new MyFont();
			var myTextFormat:TextFormat = new TextFormat();
			myTextFormat.align = TextFormatAlign.CENTER;
			myTextFormat.font = myFont.fontName;
			myTextFormat.color = 0x272728;
			myTextFormat.size = 11;
			myTextFormat.letterSpacing = 1;
			myTextFormat.leftMargin = 0;

			var Close_btn:Button = new Button();
			Close_btn.label = "X";
			Close_btn.setStyle("embedFonts", true);
			Close_btn.setStyle("textFormat", myTextFormat);
			Close_btn.textField.antiAliasType = AntiAliasType.ADVANCED;
			Close_btn.setSize(23, 23);
			Close_btn.move(730,3);//78
			Close_btn.useHandCursor = true;
			Close_btn.addEventListener(MouseEvent.CLICK, mouseDownHandler25);
			addChild(Close_btn);
		}
		public function mouseDownHandler25(event:MouseEvent):void {
			MovieClip(this.parent.parent).gotoAndStop(1);
			trace(parent is MovieClip);//true
			trace(parent);//[object standByMode]
		}
		private function onClick1(event:MouseEvent):void {
			switch (event.currentTarget.name) {
				case "Grazia" :
					var newBio:GraziaMC = new GraziaMC();
					addChild(newBio);
					newBio.x = 30;
					newBio.y = 35;
					newBio.addEventListener(MouseEvent.CLICK, closeBio);
					trace("ONCLICK1 - Grazia");
					break;
				case "Porta" :
					var newBio1:PortaMC = new PortaMC();
					addChild(newBio1);
					newBio1.x = 30;
					newBio1.y = 35;
					newBio1.addEventListener(MouseEvent.CLICK, closeBio1);
					trace("ONCLICK1 - Porta");
					break;
			}
			function closeBio(e:MouseEvent):void {
				removeChild(newBio);
			}
			function closeBio1(e:MouseEvent):void {
				removeChild(newBio1);
			}
		}
		private function BoxDpull():void {
			var square:Sprite = new Sprite();
			square.graphics.beginFill(0xffffff);
			square.graphics.lineStyle(1,0x000000, 100);
			square.alpha = 1;
			square.graphics.drawRect(0,55,125,25);
			square.buttonMode=true;
			square.addEventListener(MouseEvent.CLICK, onClick1);
			square.name = "Grazia";
			addChild(square);
		}
		private function BoxWallMount():void {
			var square:Sprite = new Sprite();
			square.graphics.beginFill(0xffffff);
			square.graphics.lineStyle(1,0x000000, 100);
			square.alpha = 1;
			square.graphics.drawRect(0,85,125,25);
			square.buttonMode=true;
			square.addEventListener(MouseEvent.CLICK, onClick1);
			square.name = "Porta";
			addChild(square);
		}
	}
}