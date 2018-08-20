<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefrontAS
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' ); ?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
        <img class="simplon" src="data:image/png;base64,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" alt="Simplon logo">
		<?php
		do_action( 'storefront_content_top' );
