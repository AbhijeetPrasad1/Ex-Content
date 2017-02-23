<?php

add_action( 'admin_menu', 'ex_content_add_admin_menu' );
add_action( 'admin_init', 'ex_content_settings_init' );


function ex_content_add_admin_menu(  ) { 

	add_submenu_page('options-general.php', 'exclusive-content', 'exclusive-content', 'manage_options', 'exclusive-content', 'ex_content_options_page');

}


function ex_content_settings_init(  ) { 

	register_setting( 'ex_content_op', 'ex_content_settings' );
/*
	add_settings_section(
		'ex_content_pluginPage_section', 
		__( 'Your section description', 'wordpress' ), 
		'ex_content_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'ex_content_text_field_0', 
		__( 'Settings field description', 'wordpress' ), 
		'ex_content_text_field_0_render', 
		'pluginPage', 
		'ex_content_pluginPage_section' 
	);

	add_settings_field( 
		'ex_content_checkbox_field_1', 
		__( 'Settings field description', 'wordpress' ), 
		'ex_content_checkbox_field_1_render', 
		'pluginPage', 
		'ex_content_pluginPage_section' 
	);
*/

}

function ex_content_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>exclusive-content</h2>

		<?php
		settings_fields( 'ex_content_op' );
		do_settings_sections( 'ex_content_op' );
		submit_button();
		?>

	</form>
	<?php

}
