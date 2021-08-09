<?php
/**
 * Template Name: Services
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

	<?php get_template_part( 'template-parts/modules/page-hero' ); ?>

	<main id="primary" class="site-main">
		
		<!-- page content -->
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		
		<!-- services -->
		<?php get_template_part( 'template-parts/modules/post-loop-services' ); ?>
		
		<!-- related services -->
		<?php get_template_part( 'template-parts/modules/related-services' ); ?>

	</main><!-- #main -->

<?php
get_footer();
