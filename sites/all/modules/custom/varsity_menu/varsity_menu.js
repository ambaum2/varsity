jQuery.noConflict();
	jQuery(document).ready(function() {
		jQuery('.main_link').hover(
			function () {
				jQuery(this).find('.nav_overlay').stop(true,true).fadeIn('slow'); 
				jQuery(this).children("ul").stop(true,true).slideDown("600");				
			},
			function () { 
				jQuery(this).find('.nav_overlay').stop(true,true).fadeOut('slow'); 
				jQuery(this).children("ul").stop(true,true).slideUp("600");
		});
	});

	
		/*jQuery('.sub_menu li').hover(
			function() {
				jQuery(this).('.nav_overlay').show();
			},
			function () {
				jQuery(this).('.nav_overlay').hide();
			}
		);*/
			/*jQuery('.subLink').hover(
	 			function () {
			 		jQuery(this).children("ul").stop(true,true).slideDown("600");
			 	},
			 	function () {
			 		jQuery(this).children("ul").stop(true,true).slideUp("600");
			});*/ 
		/*jQuery('.topLink a').hover(
			function () {
				jQuery(this).children("img").attr("src",switchSrc(this,"_1.png","_2.png"));
			},
			function () {
				jQuery(this).children("img").attr("src",switchSrc(this,"_2.png","_1.png"));
			}); */
		/*jQuery('.main_link').mouseenter(function() { 
			
		});
		jQuery('.main_link').mouseleave(function() { 
			
		});*/