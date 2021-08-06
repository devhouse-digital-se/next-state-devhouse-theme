<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Next_State_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<?php get_template_part( 'template-parts/modules/post-hero' ); ?>
		
		<section class="container-fluid">
			<div class="row">
				
				<article class="container m-100">
					<div class="row">
						
						<div class="col-sm-12 col-md-8 m-auto">
							
							<?php

								echo get_the_content();
								
							?>
							
						</div>
					
					</div>
					
					<div class="row">
						<div class="col-sm-12 col-md-8 col-lg-8 m-auto">
							<?php get_template_part( 'template-parts/parts/share-links' ); ?>
						</div>
					</div>
					
				</article>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
