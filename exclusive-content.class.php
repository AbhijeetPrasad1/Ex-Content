<?php

class Ex_Content {

	function __construct() {
		// Main shortcode.
		add_shortcode( 'hide', array( $this, 'shortcode' ));

		//Ex_Content_Loader::setup();
	}

	function shortcode($atts, $content) {
		//die($content);
		if(is_user_logged_in()) {
			return $content;
		} else {
			return '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg"> <br/> <p> hello </p>';
		}
	}
}