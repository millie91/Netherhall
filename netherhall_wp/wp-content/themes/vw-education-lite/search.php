<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package VW Education Lite
 */

get_header(); ?>

<div class="container">
    <div class="middle-align content_sidebar">
        <div class="col-md-9" id="content-vw">
            <div class="site-main" id="sitemain">
                <?php if ( have_posts() ) : ?>

                    <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'vw-education-lite' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <h2><?php the_title() ?></h2>
                        <?php the_content() ?>

                    <?php endwhile; ?>
                    <div class="clearfix"></div>                    
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
                <?php else : ?>
                    <?php get_template_part( 'no-results', 'search' ); ?>
                <?php endif; ?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col-md-3">
            <?php get_sidebar();?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<?php get_footer(); ?>