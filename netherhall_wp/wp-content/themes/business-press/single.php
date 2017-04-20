<?php get_header(); ?>

<div class="<?php if( get_theme_mod( 'business_press_blog_single_layout', 'rights' ) == 'rights' ) { echo 'col-md-8'; } else { echo 'col-md-12'; } ?>">
	<div class="left-content" >
		
		<?php
		while( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() );
			
			comments_template();

			business_press_post_pagination();
		
		endwhile;
		?>
		
	</div>
</div>
<?php if( get_theme_mod( 'business_press_blog_single_layout', 'rights' ) == 'rights' ) { get_sidebar(); } ?>
<?php get_footer(); ?>