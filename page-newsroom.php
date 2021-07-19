<?php
/**
 * Template Name: News archive
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

	<main id="primary" class="site-main">

		<?php get_template_part( 'template-parts/home-hero' ); ?>
		
		<!-- featured post -->
		<div class="container-fluid featured-post">
			<div class="row">
				
				<div class="container">
							
					<?php get_template_part( 'template-parts/post-loop-news', null, array('loop-type' => 'featured') ); ?>	

				</div>
				
			</div>
		</div><!-- .featured post-->
		
		<!-- post grid -->
		<div class="container-fluid post-grid">
			<div class="row">
				
				<div class="container">

					<?php get_template_part( 'template-parts/post-loop-news', null, array('loop-type' => 'grid') ); ?>	
							
				</div>
				
			</div>
		</div><!-- .post grid -->
		
		
	</main><!-- #main -->

<?php
get_footer();
