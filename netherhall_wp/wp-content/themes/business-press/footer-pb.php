	
	</div>
</div>

<?php
if( class_exists( 'RWMB_Loader' ) )
{
	if( rwmb_meta( 'business_press_hide_footer_widgets' ) != 1 )
	{
		get_template_part( 'template-parts/widgets', 'footer' );
	}
}
else
{
	get_template_part( 'template-parts/widgets', 'footer' );
}
?>

<?php get_template_part( 'template-parts/copyright', 'footer' ); ?>

<?php if( get_theme_mod( 'business_press_back_to_top', '1' ) == 1 ) { ?>
	<a id="back-to-top" href="#"><span class="fa fa-chevron-up"></span></a>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>