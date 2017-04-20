<?php
/**
 * The Template for displaying all single posts.
 *
 * @package VW Education Lite
 */

get_header(); ?>

<div class="container">
    <div class="middle-align">
        <div class="col-md-9" id="content-vw">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title();?></h1>
                <div class="metabox">
                    <span class="entry-date"><?php echo get_the_date(); ?></span>
                    <span class="entry-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span>
                    <span class="entry-comments"><?php comments_number( __('0 Comments','vw-education-lite'), __('0 Comments','vw-education-lite'), __('% Comments','vw-education-lite')); ?></span>
                </div><!-- metabox -->
                <?php if(has_post_thumbnail()) { ?>
                    <hr>
                    <div class="feature-box">   
                        <img src="<?php the_post_thumbnail_url('full'); ?>"  width="100%">
                    </div>
                    <hr>                    
                <?php } the_content();
                the_tags(); ?>                
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                
                if ( is_singular( 'attachment' ) ) {
                    // Parent post navigation.
                    the_post_navigation( array(
                        'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-education-lite' ),
                    ) );
                } elseif ( is_singular( 'post' ) ) {
                    // Previous/next post navigation.
                    the_post_navigation( array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-education-lite' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Next post:', 'vw-education-lite' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-education-lite' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-education-lite' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                    ) );
                }
            endwhile; // end of the loop. ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar('page'); ?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php get_footer(); ?>