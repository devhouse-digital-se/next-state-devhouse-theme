<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Next_State_Theme
 */

?>

<?php get_template_part( 'template-parts/page-hero' ); ?>

<section class="container-fluid">
	<div class="row">
		
		<section class="container m-100">
			<div class="row">
				
				<div class="col-12">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<div class="entry-content">
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
