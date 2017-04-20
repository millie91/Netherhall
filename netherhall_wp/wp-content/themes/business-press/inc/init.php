<?php

/**
 * theme setup addition.
 */
require_once get_template_directory() . '/inc/core/theme-setup.php';

/**
 * styles and scripts addition.
 */
require_once get_template_directory() . '/inc/core/style-scripts.php';

/**
 * add inline css in front head
 */
require_once get_template_directory() . '/inc/core/inline-css.php';

/**
 * register sidebars addition.
 */
require_once get_template_directory() . '/inc/core/register-sidebars.php';

/**
 * custom widgets addition.
 */
require_once get_template_directory() . '/inc/core/custom-widgets.php';

/**
 * action and filter addition.
 */
require_once get_template_directory() . '/inc/core/action-filters.php';

/**
 * individual functions addition.
 */
require_once get_template_directory() . '/inc/core/individual-functions.php';

/**
 * navwalker.
 */
require_once get_template_directory() . '/inc/core/navwalker.php';

/**
 * tgm class.
 */
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

/**
 * tgm options.
 */
require get_template_directory() . '/inc/tgm/tgm-options.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/kirki/kirki-fallback.php';

/**
 * Include the kirki options file.
 */
require get_template_directory() . '/inc/kirki/kirki-options.php';

/**
 * Include metabox options file.
 */
require get_template_directory() . '/inc/metabox/metabox_options.php';

/**
 * Include custom woocommerce file.
 */
require get_template_directory() . '/inc/core/custom-woocommerce.php';

/**
 * Kirki css fix (temporary).
 */
require get_template_directory() . '/inc/core/kirki-css-fix.php';

/*
* Do not edit any code of theme, use child theme instead
*/

