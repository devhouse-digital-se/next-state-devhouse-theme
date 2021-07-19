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

	<?php get_template_part( 'template-parts/page-hero' ); ?>

	<main id="primary" class="site-main">
		
		<section class="container-fluid">
			<div class="row">
				
				<section class="container m-100">
					<div class="row">

					<?php
					
					echo get_the_content();
					
					?>
					
					</div>
				</section>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
