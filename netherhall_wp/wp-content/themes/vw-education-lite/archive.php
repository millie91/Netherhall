<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package VW Education Lite
 */

get_header(); ?>

<div class="container">
    <div class="middle-align content_sidebar">
        <div class="col-md-9" id="content-vw">
            <?php if ( have_posts() ) :

            // Start the Loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="page-title">
                                <?php
                                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                                ?>
                            </h1>
                            <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                                <span class="sticky-post"><?php _e( 'Featured', 'vw-education-lite' ); ?></span>
                            <?php endif; ?>

                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header>

                        <?php
                        if ( is_singular() ) :
                        ?>

                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div><!-- .post-thumbnail -->

                        <?php else : ?>

                            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
                                <?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
                            </a>

                        <?php endif; // End is_singular() ?>

                        <div class="entry-content">
                            <?php
                                /* translators: %s: Name of current post */
                                the_content( sprintf(
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vw-education-lite' ),
                                    get_the_title()
                                ) );

                                wp_link_pages( array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'vw-education-lite' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'vw-education-lite' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                                ) );
                            ?>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php
                                edit_post_link(
                                    sprintf(
                                        /* translators: %s: Name of current post */
                                        __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'vw-education-lite' ),
                                        get_the_title()
                                    ),
                                    '<span class="edit-link">',
                                    '</span>'
                                );
                            ?>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-## -->
                <?php

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'vw-education-lite' ),
                'next_text'          => __( 'Next page', 'vw-education-lite' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-education-lite' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'no-results', 'archive' );

        endif;
        ?>
        </div>
        <div class="col-md-3">
            <?php dynamic_sidebar('sidebar-1');?>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>