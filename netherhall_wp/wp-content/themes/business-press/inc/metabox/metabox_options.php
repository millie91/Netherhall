<?php

if( !class_exists( 'RWMB_Loader' ) )
{
	return;
}


function business_press_page_meta_box( $meta_boxes )
{
        $meta_boxes[] = array(
			'id'         => 'business_press_page_meta',
            'title'      => esc_attr__( 'Theme Options for this page / post', 'business-press' ),
            'post_types' => array( 'page','post' ),
            'fields'     => array(
			
                array(
                    'id'   => 'business_press_slider_scode',
                    'name' => esc_attr__( 'Slider Shortcode', 'business-press' ),
                    'type' => 'text',
                ),
				
				array(
                    'id'      => 'business_press_hide_titlebar',
                    'name'    => esc_attr__( 'Want to disable Title bar?', 'business-press' ),
                    'type'    => 'checkbox',
                ),
				
                array(
                    'id'      => 'business_press_hide_title',
                    'name'    => esc_attr__( 'Want to disable Page Headline?', 'business-press' ),
                    'type'    => 'checkbox',
                ),
				
				array(
                    'id'      => 'business_press_hide_footer_widgets',
                    'name'    => esc_attr__( 'Want to disable Footer Widgets?', 'business-press' ),
                    'type'    => 'checkbox',
                ),
                
            ),
        );
        return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'business_press_page_meta_box' );
?>