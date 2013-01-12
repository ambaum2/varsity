<?php
function varsity_preprocess_page(&$variables) {
	drupal_add_css(drupal_get_path("module","varsity_menu") . "/varsity_menu.css",array("group"=>CSS_THEME,"weight"=>5)); //internal css needs to be added like this
	drupal_add_js(drupal_get_path("module","varsity_menu") . "/varsity_menu.js",array("group"=>JS_THEME,"weight"=>5));
	//drupal_add_js(drupal_get_path("theme","varsity") . "/js/jquery-ui-1.8.22.custom.min.js",array("group"=>JS_THEME,"weight"=>5));
	//drupal_add_js(drupal_get_path("theme","varsity") . "/js/varsity_scrollbars.js",array("group"=>JS_THEME,"weight"=>5));
	
	drupal_add_css("http://fonts.googleapis.com/css?family=Ubuntu|Oswald|Karla|Quando|Alegreya&ver=3.3.2", array('group' => CSS_THEME, 'weight'=>-10,'type' => 'external'));
}
