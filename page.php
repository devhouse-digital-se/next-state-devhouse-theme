<?php
/**
 * The template for displaying all pages
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
		
		<section class="container-fluid">
			<div class="row">
				
				<article class="container m-100">
					<div class="row">
						
						<div class="col-sm-12 col-md-8 m-auto single-content__wrapper">
							
							<?php

								echo get_the_content();
								
							?>
							
						</div>
					
					</div>
				</article>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
