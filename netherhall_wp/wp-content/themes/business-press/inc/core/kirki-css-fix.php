<?php

//The kirki editor css fix
if ( $pagenow == 'customize.php' ) {
	add_action( 'admin_enqueue_scripts', 'business_press_type_editor_fixer' );
}
function business_press_type_editor_fixer() {
	wp_enqueue_style( 'business-press-type-editor-fix', get_template_directory_uri() . '/css/kirki-css-fix.css', array(), '4.6.3', 'all' );
}

