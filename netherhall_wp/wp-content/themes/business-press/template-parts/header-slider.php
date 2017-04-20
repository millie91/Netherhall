<?php
if( get_the_ID() )
{
	if( class_exists( 'RWMB_Loader' ) )
	{
		if( rwmb_meta( 'business_press_slider_scode' ) )
		{
			echo do_shortcode( wp_kses_post( rwmb_meta( 'business_press_slider_scode' ) ) );
		}
	}
}
?>