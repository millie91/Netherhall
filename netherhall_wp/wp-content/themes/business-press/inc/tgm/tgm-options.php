<?php
/**
 * Include the TGM_Plugin_Activation class. (included in init.php)
 */

add_action( 'tgmpa_register', 'business_press_register_required_plugins' );

function business_press_register_required_plugins()
{
	$plugins = array(

		array(
			'name'      => 'Kirki Toolkit (Required for theme options)',
			'slug'      => 'kirki',
			'required'  => false,
		),
		
		array(
			'name'      => 'Meta Slider (for Slider)',
			'slug'      => 'ml-slider',
			'required'  => false,
		),
		
		array(
			'name'      => 'Regenerate Thumbnails',
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),
		
		array(
			'name'      => 'Meta Box (Required for theme options)',
			'slug'      => 'meta-box',
			'required'  => false,
		),
		
		array(
			'name'      => 'Page Builder by SiteOrigin (Page Builder)',
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		
		array(
			'name'      => 'SiteOrigin Widgets Bundle (Page Builder Widgets)',
			'slug'      => 'so-widgets-bundle',
			'required'  => false,
		),
		
		array(
			'name'      => 'WooCommerce (For E-Commerce)',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		
		array(
			'name'      => 'Contact Form 7 (For Forms)',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

	);
	
	
	$config = array(
		'id'           => 'business-press',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'business-press-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
