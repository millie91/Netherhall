<?php  /* Template Name: Stories */ 

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

?>

|

<br />
<?php<br />
global $more;<br />
$more = 0;<br />
query_posts('cat=4');<br />
if(have_posts()) : while(have_posts()) : the_post();<br />
?></p>
<p><a href=&amp;quot;<?php the_permalink(); ?>&amp;quot;><?php the_title( '</p>
<h3>', </h3>
<p>' ); ?></a></p>
<p><?php<br />
endwhile;<br />
endif;<br />
wp_reset_query();<br />
?><br />