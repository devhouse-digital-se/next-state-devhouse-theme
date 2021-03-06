<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Next_State_Theme
 */

?>

<section class="container-fluid page-content__wrapper">
	<div class="row">
		
		<section class="container m-50">
			<div class="row">
				
				<div class="col-12 col-md-8">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<div class="entry-content" tabindex="0">
							<?php
							the_content();
					
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'next_state' ),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->

					</article><!-- #post-<?php the_ID(); ?> -->
				</div>
				
			</div>
		</section>
		
	</div>
</section>
