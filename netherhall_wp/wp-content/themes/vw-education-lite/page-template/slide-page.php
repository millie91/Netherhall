<?php
/**
 * Template Name: Slide page
 */

get_header(); 
?>

<?php /** slider section **/ ?>
<?php
  // Get pages set in the customizer (if any)
  $pages = array();
  for ( $count = 1; $count <= 5; $count++ ) {
    $mod = intval( get_theme_mod( 'vw_education_lite_slidersettings-page-' . $count ));
    if ( 'page-none-selected' != $mod ) {
      $pages[] = $mod;
    }
  }
  if( !empty($pages) ) :
    $args = array(
      'posts_per_page' => 5,
      'post_type' => 'page',
      'post__in' => $pages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
      $count = 1;
      ?>
    <div class="slider-main">
        <div id="slider" class="nivoSlider">
          <?php
            $vw_education_lite_n = 0;
        while ( $query->have_posts() ) : $query->the_post();
          
          $vw_education_lite_n++;
          $vw_education_lite_slideno[] = $vw_education_lite_n;
          $vw_education_lite_slidetitle[] = get_the_title();
          $vw_education_lite_slidelink[] = esc_url(get_permalink());
          ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $vw_education_lite_n ); ?>" />
          <?php
        $count++;
        endwhile;
          ?>
        </div>

      <?php
      $vw_education_lite_k = 0;
        foreach( $vw_education_lite_slideno as $vw_education_lite_sln ){ ?>
        <div id="slidecaption<?php echo esc_attr( $vw_education_lite_sln ); ?>" class="nivo-html-caption">
          <div class="slide-cap  ">
            <div class="container">
              <h2><?php echo esc_html($vw_education_lite_slidetitle[$vw_education_lite_k] ); ?></h2>
              <a class="read-more" href="<?php echo esc_url($vw_education_lite_slidelink[$vw_education_lite_k] ); ?>"><?php _e( 'Learn More','vw-education-lite' ); ?></a>
            </div>
          </div>
        </div>
          <?php $vw_education_lite_k++;
        wp_reset_postdata();
      } ?>
    </div>
      <?php else : ?>
        <div class="header-no-slider"></div>
      <?php
    endif;
  endif;
?>

<div class="main-container">
  <section class="services">
      <div class="container">
        <div class="hey-title"><?php echo esc_html( get_theme_mod('section1_title','') ); ?></div>
        <div class="new-line"><?php echo esc_html( get_theme_mod('section1_subtitle','') ); ?></div>
          <?php if ( have_posts() ) :
          /* Start the Loop */
            $vw_education_lite_number = 1;
            while ( have_posts() ) : the_post(); ?>
              <div class="services-box col-md-4">
                  <div class="service-image">
                    <a href="<?php the_permalink(); ?>">
                      <?php 
                        if(has_post_thumbnail()) { 
                          the_post_thumbnail(); 
                        }
                      ?>
                    </a>
                  </div>
                  <div class="service-text">
                    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink(); ?>" class="Masters-In-Digital-Marketing" title="<?php _e('Read More','vw-education-lite'); ?>"><?php _e('Read More','vw-education-lite'); ?></a>   
                  </div>       
              </div>
            <?php if(($vw_education_lite_number %3) == 0){ echo '<div class="clearfix"></div>';  }
            
            $vw_education_lite_number++;

          endwhile; ?>
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
          <?php else :
            get_template_part( 'no-results', 'archive' ); 
          endif; ?>
      </div>
      <div class="clear"></div>
  </section>
</div>
<?php get_footer(); ?>