<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Next_State_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="ahrefs-site-verification" content="9349a54deda410e50c76ae1a002aa0791ab9b3fa7fc1650c3d7d7c948845b26d">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="/wp-content/themes/next_state/inc/css/mhead.css" rel="stylesheet" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'next_state' ); ?></a>

	<header id="masthead" class="site-header">
		
		<?php get_template_part( 'template-parts/modules/main-navigation'); ?>
		
		<?php
		if (is_page_template('page-service.php') && get_field('display_section_navigation') == 1) :
			get_template_part( 'template-parts/modules/hero-menu' ); 
		endif;
		?>
		
	</header><!-- #masthead -->
	