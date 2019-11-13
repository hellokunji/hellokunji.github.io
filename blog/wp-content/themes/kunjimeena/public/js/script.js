$(document).ready(function(){
	var width= $(window).width();
	var cal_width= (width-1100)/2;
	//$("._hmi_img").css("right", cal_width);
	homeScroll();
	window.addEventListener("scroll", homeScroll);

	function homeScroll(){
			var scrollPos= $(window).scrollTop();
			/*
			if(width>1080){
				if(scrollPos>=428){
					//$("._hmi_img_fixed").css("right", 0);
					//$("._hmi_img").removeClass("_hmi_img_fixed");
					console.log("yes");
					$("._hmi_img").css({'right':0, 'position':'absolute'});
				}
				else{
					//$("._hmi_img_fixed").css("right", cal_width);	
					//$("._hmi_img").addClass("_hmi_img_fixed");
					$("._hmi_img").css({'right':cal_width, 'position':'fixed'});
					console.log("no");
				}
				console.log(scrollPos);
			}
			else{
				*/
				var cont_height;
				var pos_right;
				if(width>=0 && width<665){
					cont_height= 994;
					pos_right= 20;
				}
				else if(width>=665 && width<730){
					cont_height= 777;
					pos_right= 20;
				}
				else if(width>=730 && width<1024){
					cont_height= 794;
					pos_right= 20;
				}
				else if(width>=1024 && width<1100){
					cont_height= 264;
					pos_right= 20;
				}
				else{
					cont_height= 299;
					pos_right= cal_width;
				}

				if(scrollPos>=cont_height){
					$("._hmi_img").css({'right':0, 'position':'absolute'});
				}
				else{
					$("._hmi_img").css({'right':pos_right, 'position':'fixed'});
				}
			//}
				console.log(scrollPos);
	}

});