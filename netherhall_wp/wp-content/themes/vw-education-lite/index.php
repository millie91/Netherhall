<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Precious Lite
 */

get_header(); 
?>

<div class="main-container">
  <section class="services">
      <div class="container">
        <div class="hey-title"><?php echo esc_html( get_theme_mod('section1_title','') ); ?></div>
        <div class="new-line"><?php echo esc_html( get_theme_mod('section1_subtitle','') ); ?></div>
			<div class="col-md-8">
          <?php if ( have_posts() ) :
          /* Start the Loop */
            while ( have_posts() ) : the_post(); ?>
              
              <div class="services-box">
                  <div class="service-image">
                      <?php 
                        if(has_post_thumbnail()) { 
                          the_post_thumbnail(); 
                        }
						else{
							?>
							<a href="<?php echo get_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-thumbnail.jpg"></a>
							<?php
						}
                      ?>
                    
                  </div>
                  <div class="service-text">
                    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink(); ?>" class="Masters-In-Digital-Marketing" title="<?php _e('Read More','vw-education-lite'); ?>"><?php _e('Read More','vw-education-lite'); ?></a>   
                  </div>       
               </div>    
             
			  
            <?php endwhile; ?>
            <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'vw-education-lite' ),
                    'next_text'          => __( 'Next page', 'vw-education-lite' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-education-lite' ) . ' </span>',
                ) );
            ?>
            </div>
			 </div>
			
			<div class="col-md-3 col-md-offset-1">
			<?php get_sidebar();?>
			</div>
			<div class="clearfix"></div>
          <?php else :
            get_template_part( 'no-results', 'archive' ); 
          endif; ?>
		  
      </div>
      <div class="clearfix"></div>
  </section>
</div>
<?php get_footer(); ?>