/*package {

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


	public class indexSlideShowXML extends Sprite {

		public function indexSlideShowXML(){
			trace ('the main document class is ALIVE.  Hooray! ');


			
		}
		
	}
}*/
package {

	import flash.display.MovieClip;
	import flash.display.Sprite;
	
	public class indexSlideShowXML extends MovieClip {

		public function indexSlideShowXML() {

			trace ('the main document class is ALIVE.  Hooray! ');
					var pinstripeTop:Sprite=new Sprite;
			//pinstripeTop.graphics.lineStyle(0,0x000000,100);
			pinstripeTop.graphics.beginFill(0xE6DEC8);
			pinstripeTop.graphics.drawRect(0,0,800,6);
			pinstripeTop.graphics.endFill();
			pinstripeTop.name="up";
			pinstripeTop.alpha=1;
			addChild(pinstripeTop);

		}

	}

}