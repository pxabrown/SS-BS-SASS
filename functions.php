<?php

/****************************************
Theme Setup
*****************************************/

require_once( get_template_directory() . '/lib/init.php' );
require_once( get_template_directory() . '/lib/theme-helpers.php' );
require_once( get_template_directory() . '/lib/theme-functions.php' );
require_once( get_template_directory() . '/lib/theme-comments.php' );
require_once( get_template_directory() . '/lib/theme-options.php' );
require_once( get_template_directory() . '/lib/bootstrap-walker.php' );
require_once( get_template_directory() . '/lib/bootstrap-carousel.php' );

/****************************************
Require Plugins
*****************************************/

//require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
//require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

//add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/
add_theme_support( 'woocommerce' ); //WOOCOMMERCE SUPPORT
/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps() {
	mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}

/**
 * Remove auto p and br tags
 */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
