<?php

add_action( 'admin_menu', 'ex_content_add_admin_menu' );
add_action( 'admin_init', 'ex_content_settings_init' );


function ex_content_add_admin_menu(  ) { 

	add_submenu_page('options-general.php', 'exclusive-content', 'exclusive-content', 'manage_options', 'exclusive-content', 'ex_content_options_page');

}


function ex_content_settings_init(  ) { 

	register_setting( 'ex_content_op', 'ex_content_settings' );

	add_settings_section(
		'ex_content_section', 
		__( 'Replacement Settings', 'wordpress' ), 
		'ex_content_settings_section_callback', 
		'ex_content_op'
	);

	add_settings_field( 
		'replacement_text_field', 
		__( 'Enter the replacement html', 'wordpress' ), 
		'render_replacement_text_field', 
		'ex_content_op', 
		'ex_content_section' 
	);

function render_replacement_text_field() {
	$options = get_option( 'ex_content_settings' );
	?>
	<input type='text' size="50" name='ex_content_settings[ex_content_text_field]' value='<?php echo $options['ex_content_text_field']; ?>'>
	<?php
}

}

function ex_content_settings_section_callback(  ) { 

	echo __( 'Enter the html that will be replaced', 'wordpress' );

}

function ex_content_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>Exclusive Content Plugin</h2>

		<?php
		settings_fields( 'ex_content_op' );
		do_settings_sections( 'ex_content_op' );
		submit_button();
		?>

	</form>
	<?php

}


