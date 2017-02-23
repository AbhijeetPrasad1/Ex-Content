<?php

class Ex_Content_Loader {

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
			return '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg">';
		}
	}
/*
	public static function setup() {
		//add_action('admin_init', 'ex_content_menu');
	}

	function ex_content_menu() {
		register_settings('Ex_Content Options', 'Ex_Content', 'manage_options', 'my-unique-indentifier', 'Ex_Content_Options');
	}

	public static function my_plugin_options() {
		if ( !current_user_can('manage_options')) {
			wp_die( __('You cannot access this page.'));
		}
		echo '<div class="wrap">';
		echo '<p>Here is where the form would go if I actually had options.</p>';
		echo '</div>';
	}
	*/
}