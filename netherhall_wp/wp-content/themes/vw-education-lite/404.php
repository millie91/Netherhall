<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package VW Education Lite
 */

get_header(); ?>

<div id="content-vw">
    <div class="container">
        <div class="page-content">      
            <div class="col-md-12">
                <h1><?php the_title();?></h1>
                <h3><?php _e( '<strong>404</strong> Not Found', 'vw-education-lite' ); ?></h3>
                <p class="text-404"><?php _e( 'Looks like you have taken a wrong turn.....', 'vw-education-lite' ); ?></p>
                <p class="text-404"><?php _e( 'Don\'t worry... it happens to the best of us.', 'vw-education-lite' ); ?></p>
                <div class="read-moresec">
                    <div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php _e( 'Back to Home Page', 'vw-education-lite' ); ?></a></div>
                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <div class="clearfix"></div>
    </div>
</div>

<?php get_footer(); ?>