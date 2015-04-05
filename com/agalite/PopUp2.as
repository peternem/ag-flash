package com.agalite{
	import flash.display.Sprite;
	import flash.filters.DropShadowFilter;

	public class PopUp2 extends Sprite {
		public function PopUp2() {
			PopUpBg2();
		}
		public function PopUpBg2():void {
			///  DROP SHADOW
			var my_shadow:DropShadowFilter = new DropShadowFilter();
			my_shadow.color = 0x000000;// Now we apply some properties to our new filters object, this first property is the color, and we set that to black, as most shadows are.
			my_shadow.blurY = 8;// These next two properties we set, are the position of our dropshadow relative to the object,
			my_shadow.blurX = 8;// This means 8 px from the object on both the x and y axis.
			my_shadow.angle = 45;// And here we set an angle for the dropshadow, also relative to the object.
			my_shadow.alpha = .5;// Setting an alpha for the shadow. This is to set the strength of the shadow, how "black" it should be.
			my_shadow.distance = 6;// and here we set the distance for our shadow to the object.
			var filtersArray:Array = new Array(my_shadow);// Now we define an array for our filter with its properties to hold it. This will be the final object we refer to when we need to apply it to something.
			
			var BackGround:Sprite = new Sprite();
			BackGround.graphics.beginFill(0x8f8c82);
			BackGround.graphics.drawRect(0,0,200,260);
			BackGround.alpha = .85;
			BackGround.filters = filtersArray;// The last step is to take our movie clip that we made at the beginning, so we take our object and apply the filtersArray.
			addChildAt(BackGround,0);
			
			////Border Sprite
			var Border:Sprite = new Sprite();
			Border.graphics.lineStyle(2, 0x999999, 100);
			Border.graphics.drawRect(0,0,200,260);
			Border.alpha = .85;
			addChildAt(Border,1);
			
			////Header Sprite
			var Header:Sprite = new Sprite();
			//Header.graphics.beginFill(0x8f8c82);
			Header.graphics.beginFill(0x8f8c82);
			Header.graphics.drawRect(1,1,198,35);
			Header.alpha =.85;
			addChildAt(Header,2);
			
		

		}
	}
}