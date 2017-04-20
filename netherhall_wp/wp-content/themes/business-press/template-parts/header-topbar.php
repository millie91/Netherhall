<?php
if( get_theme_mod( 'business_press_display_top_bar', '1' ) == 1 )
{
?>
<div id="topbar" class="container-fluid">
	<div class="container">
		<div class="row pdt10">
		
			<div class="col-md-6">
				<?php
				if( get_theme_mod( 'business_press_tpbr_left_view', '1' ) != 3 )
				{
					if( get_theme_mod( 'business_press_tpbr_left_view', '1' ) == 1 )
					{
					?>
						<div class="topbar_ctmzr">
						<?php
						echo wp_kses_post( get_theme_mod( 'business_press_top_bar_left_content', '<p><span class="fa fa-phone"></span> ' . esc_attr__( 'Call:', 'business-press' ) . ' <a href="tel:0123456789">0123456789</a> | <span class="fa fa-at"></span> ' . esc_attr__( 'Email:', 'business-press' ) . ' <a href="mailto:info@example.com">info@example.com</a></p>' ) );
						?>
						</div>
					<?php
					}
					else
					{
					?>
						<p>
						
						<?php
						if( get_theme_mod( 'business_press_tpbr_lft_phne', esc_attr__( '0123456789', 'business-press' ) ) )
						{
						?>
							<span class="fa fa-phone"></span><?php esc_attr_e( ' Call: ', 'business-press' ) ?><a href="tel:<?php echo esc_attr( get_theme_mod( 'business_press_tpbr_lft_phne', esc_attr__( '0123456789', 'business-press' ) ) ); ?>"><?php echo esc_attr( get_theme_mod( 'business_press_tpbr_lft_phne', esc_attr__( '0123456789', 'business-press' ) ) ); ?></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_tpbr_lft_phne', esc_attr__( '0123456789', 'business-press' ) ) && get_theme_mod( 'business_press_tpbr_lft_email', esc_attr__( 'info@example.com', 'business-press' ) ) )
						{
							esc_attr_e( ' | ', 'business-press' );
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_tpbr_lft_email', esc_attr__( 'info@example.com', 'business-press' ) ) )
						{
						?>
							<span class="fa fa-at"></span><?php esc_attr_e( ' Email: ', 'business-press' ) ?><a href="mailto:<?php echo esc_attr( get_theme_mod( 'business_press_tpbr_lft_email', esc_attr__( 'info@example.com', 'business-press' ) ) ); ?>"><?php echo esc_attr( get_theme_mod( 'business_press_tpbr_lft_email', esc_attr__( 'info@example.com', 'business-press' ) ) ); ?></a>
						<?php
						}
						?>
						
						</p>
					<?php
					}
				}
				?>
			</div>
			
			<div class="col-md-6">
				<p class="fr-spsl iconouter">
				
					<?php
					if( class_exists( 'WooCommerce' ) )
					{
					?>
						<?php
						if( get_theme_mod( 'business_press_display_shop_link_top_bar', '1' ) == 1 )
						{
						?>
						<a title="<?php esc_attr_e( 'Shop', 'business-press' ); ?>" href="<?php echo esc_url( get_permalink( get_option( 'woocommerce_shop_page_id' ) ) ); ?>"><span class="fa fa-shopping-bag bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_display_cart_link_top_bar', '1' ) == 1 )
						{
						?>
						<a title="<?php esc_attr_e( 'Cart', 'business-press' ); ?>" href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>"><span class="fa fa-shopping-cart bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_display_myaccount_link_top_bar', '1' ) == 1 )
						{
						?>
						<a title="<?php esc_attr_e( 'My Account ', 'business-press' ); ?>" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><span class="fa fa-user bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
					
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'business_press_display_sicons_top_bar', '1' ) == 1 )
					{
						if( get_theme_mod( 'business_press_social_profile_link_facebook', 'http://facebook.com' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'Facebook', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_facebook', 'http://facebook.com' ) ); ?>"><span class="fa fa-facebook bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_social_profile_link_twitter', 'http://twitter.com' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'Twitter', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_twitter', 'http://twitter.com' ) ); ?>"><span class="fa fa-twitter bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_social_profile_link_youtube', 'http://youtube.com' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'YouTube', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_youtube', 'http://youtube.com' ) ); ?>"><span class="fa fa-youtube bgtoph-icon-clr"></span></a>
						<?php
						}
						?>

						<?php
						if( get_theme_mod( 'social_profile_link_vk' ) )
						{
						?>
							<a title="<?php _e( 'VK', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'social_profile_link_vk' ) ); ?>"><span class="fa fa-vk bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_social_profile_link_googleplus' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'Google Plus', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_googleplus' ) ); ?>"><span class="fa fa-google bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_social_profile_link_linkedin' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'Linkedin', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_linkedin' ) ); ?>"><span class="fa fa-linkedin bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_social_profile_link_pinterest' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'Pinterest', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_pinterest' ) ); ?>"><span class="fa fa-pinterest-p bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'business_press_social_profile_link_skype' ) )
						{
						?>
							<a title="<?php esc_attr_e( 'Skype', 'business-press' ); ?>" href="skype:<?php echo esc_attr( get_theme_mod( 'business_press_social_profile_link_skype' ) ); ?>?add"><span class="fa fa-skype bgtoph-icon-clr"></span></a>
						<?php
						}
					}
					?>
					
					
				</p>
			</div>
			
		</div>
	</div>
</div>
<?php
}
?>