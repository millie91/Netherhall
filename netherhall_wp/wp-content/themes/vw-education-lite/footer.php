<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Education Lite
 */
?>
        <div class="copyright-wrapper">
        	<div class="inner">
                <div class="footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
                </div><div class="clear"></div> 
                <div class="copyright">
                    <p><?php echo esc_html(get_theme_mod('vw_education_lite_footer_copy','')); ?></p>
                </div><div class="clear"></div>
                <div class="copyright">
                    <p><?php echo esc_html( get_theme_mod('vw_education_lite_footer_copy','') ); ?></p>
                    <p><a href="<?php echo esc_url('http://www.vwthemes.com/product/vw-education-theme/'); ?>">Design by VW Themes</a></p>               
                </div><!-- copyright --><div class="clear"></div>  
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>