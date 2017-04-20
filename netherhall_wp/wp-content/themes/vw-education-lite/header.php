<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package VW Education Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php _e('Menu','vw-education-lite'); ?></a></div> 
  <div class="top-bar">
	<div class="container">
      <div class="contact-call-email">
        <div class="col-md-3">
          <?php if(get_theme_mod('vw_education_lite_cont_phone','') != '') { ?>
            <span class="dashicons dashicons-phone"></span><?php echo esc_html( get_theme_mod('vw_education_lite_cont_phone','') ); ?>
          <?php } ?>
        </div>
		
    		<div class="col-md-3">
          <?php if(get_theme_mod('vw_education_lite_cont_email','') != '') { ?>
            <span class="dashicons  dashicons-email"></span><a href="mailto:<?php echo esc_attr(get_theme_mod('vw_education_lite_cont_email','')); ?>"><?php echo esc_html(get_theme_mod('vw_education_lite_cont_email','')); ?></a></span>
          <?php } ?>
        </div>
    	  <div class="clearfix"></div>
  	  </div>
	</div>
  </div><!-- top-bar -->
  <div class="header">
	<div class="container">
      <div class="logo">
        <?php vw_education_lite_the_custom_logo(); ?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php $description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>
	</div>
     
      <div class="clear"></div>
	   </div>
  </div><!-- header -->
  
  <div class="menu-bar nav">
	<div class="container">
        <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
		<div class="clearfix"></div>
	</div>      
  </div>