<?php

class Ex_Content {

	function __construct() {
		add_shortcode( 'hide', array( $this, 'shortcode' ));
	}

	// implements the shortcode replacement
	function shortcode($atts, $content) {
		$replacementText = get_option('ex_content_settings');
		if(is_user_logged_in()) {
			return $content;
		} else {
			if ($replacementText) {
				return  implode( '', $replacementText);
			} else {
				return '<p> ERROR PLEASE CHECK OPTION </p>'; // TEMP REPLACEMENT -> switch with some kind of base message or error message
			}
		}
	}
}

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

//'<img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg"> <br/> <p> hello </p>';