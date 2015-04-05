package com.agalite{
	import flash.text.TextField;
	import flash.display.Sprite;
	import flash.filters.DropShadowFilter;
	import fl.controls.Button;
	import flash.events.MouseEvent;

	public class PopUp1 extends Sprite {
		public function PopUp1() {
			pinstripe();
		}
		public function pinstripe():void {
			// After menu has been populated, fill empty space on screen with fill box(s).

			var popupBg:Sprite=new Sprite;
			//popupBg.graphics.lineStyle(0,0x000000,100);
			popupBg.graphics.beginFill(0x7D796D);
			popupBg.graphics.lineStyle(2, 0x999999, 100);
			popupBg.graphics.drawRect(0,0,700,345);
			popupBg.graphics.endFill();
			popupBg.alpha=1;
			addChildAt(popupBg,0);
			
			var pinstripeTop:Sprite=new Sprite;
			//pinstripeTop.graphics.lineStyle(0,0x000000,100);
			pinstripeTop.graphics.beginFill(0xEDEDED);
			pinstripeTop.graphics.drawRect(0,0,700,30);
			pinstripeTop.graphics.endFill();
			pinstripeTop.alpha=.25;
			addChildAt(pinstripeTop, 1);

			///  DROP SHADOW
			var my_shadow:DropShadowFilter = new DropShadowFilter();
			my_shadow.color = 0x000000;// Now we apply some properties to our new filters object, this first property is the color, and we set that to black, as most shadows are.
			my_shadow.blurY = 8;// These next two properties we set, are the position of our dropshadow relative to the object,
			my_shadow.blurX = 8;// This means 8 px from the object on both the x and y axis.
			my_shadow.angle = 45;// And here we set an angle for the dropshadow, also relative to the object.
			my_shadow.alpha = .5;// Setting an alpha for the shadow. This is to set the strength of the shadow, how "black" it should be.
			my_shadow.distance = 6;// and here we set the distance for our shadow to the object.
			var filtersArray:Array = new Array(my_shadow);// Now we define an array for our filter with its properties to hold it. This will be the final object we refer to when we need to apply it to something.
			popupBg.filters = filtersArray;// The last step is to take our movie clip that we made at the beginning, so we take our object and apply the filtersArray.

		}
	}
}