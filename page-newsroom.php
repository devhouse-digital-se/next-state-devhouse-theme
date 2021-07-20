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

		<?php get_template_part( 'template-parts/modules/page-hero' ); ?>
		
		<!-- post grid -->
		<div class="container-fluid post-grid">
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

					// display main post grid
					get_template_part( 'template-parts/modules/post-loop-news' ); 
					
					?>	
							
				</div>
				
			</div>
		</div><!-- .post grid -->
		
		
	</main><!-- #main -->

<?php
get_footer();
