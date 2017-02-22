<?php

class Ex_Content_Loader {

	function __construct() {
		// Main shortcode.
		add_shortcode( 'hide', array( $this, 'shortcode' ));
		
	}

	function shortcode($atts, $content) {
		//die($content);
		if(is_user_logged_in()) {
			return $content;
		} else {
			return '<p>loyalty club!!!</p>';
		}
	}
}