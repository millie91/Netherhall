<?php

class business_press_social_widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'business_press_social_widget',
			'description' => esc_attr__( 'Display social profile. Social link will be fetch from customize.', 'business-press' ),
		);
		parent::__construct( 'business_press_social_widget', esc_attr__( 'Business Press Social Profile', 'business-press' ), $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance )
	{
		// outputs the content of the widget
		echo $args['before_widget'];

		if( !empty( $instance['title'] ) )
		{
			echo $args['before_title'] . esc_attr( $instance['title'] ) . $args['after_title'];
		}
		
		?>
		<div class="textwidget">
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_facebook', 'http://facebook.com' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Facebook', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_facebook', 'http://facebook.com' ) ); ?>"><span class="fa fa-facebook social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_twitter', 'http://twitter.com' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Twitter', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_twitter', 'http://twitter.com' ) ); ?>"><span class="fa fa-twitter social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_youtube', 'http://youtube.com' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'YouTube', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_youtube', 'http://youtube.com' ) ); ?>"><span class="fa fa-youtube social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_googleplus' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Google Plus', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_googleplus' ) ); ?>"><span class="fa fa-google social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_linkedin' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Linkedin', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_linkedin' ) ); ?>"><span class="fa fa-linkedin social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_pinterest' ) )
			{
				?>
				<a title="<?php esc_attr_e( 'Pinterest', 'business-press' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'business_press_social_profile_link_pinterest' ) ); ?>"><span class="fa fa-pinterest-p social_profile-icon-clr"></span></a>
				<?php
			}
			?>
			
			<?php
			if( get_theme_mod( 'business_press_social_profile_link_skype' ) )
			{
			?>
				<a title="<?php esc_attr_e( 'Skype', 'business-press' ); ?>" href="skype:<?php echo esc_attr( get_theme_mod( 'business_press_social_profile_link_skype' ) ); ?>?add"><span class="fa fa-skype social_profile-icon-clr"></span></a>
			<?php
			}
			?>
			
			
		</div>
		<?php
		
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance )
	{
		// outputs the options form on admin
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'business-press' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance )
	{
		// processes widget options to be saved
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}
}


// register Foo_Widget widget
function business_press_register_social_widget()
{
	register_widget( 'business_press_social_widget' );
}
add_action( 'widgets_init', 'business_press_register_social_widget' );