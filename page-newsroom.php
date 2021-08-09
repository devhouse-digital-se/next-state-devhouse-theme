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

	<?php get_template_part( 'template-parts/modules/page-hero' ); ?>

	<main id="primary" class="site-main">
		
		<!-- post grid -->
		<section class="container-fluid post-grid-featured m-100">
			<div class="row">
				
				<div class="container">
				
					<?php
				
						// variables
						$enable_fwp = false;
						$posts_to_display = -1;
						$featured_post = get_field('featured_post');
						
						// display featured post if applicable
						if ($featured_post) :
							
							echo '<div class="featured-post row">';
							
								get_template_part( 'template-parts/parts/content-post-featured');
								
							echo '</div>';
							
						endif;
					
					?>
					
				</div>
				
			</div>
		</section>

		<section class="container-fluid post-grid m-100">
			<div class="row">
				<div class="container">
					<div class="col-12">
						<?php get_template_part( 'template-parts/modules/post-loop-news' ); ?>
					</div>
				</div>
			</div>
		</section>
		
	</main><!-- #main -->

<?php
get_footer();
