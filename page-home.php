<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Next_State_Theme
 */

get_header();
?>

	<?php get_template_part( 'template-parts/modules/home-hero'); ?>

	<main id="primary" class="site-main">

		<?php get_template_part( 'template-parts/modules/our-values'); ?>
		<?php get_template_part( 'template-parts/modules/solution-categories'); ?>
		<?php get_template_part( 'template-parts/modules/our-partners'); ?>
		<?php get_template_part( 'template-parts/modules/post-loop'); ?>
		
	</main><!-- #main -->

<?php
get_footer();
