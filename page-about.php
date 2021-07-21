<?php
/**
 * Template Name: About
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
		
		<?php 
		
		// page intro
		if (get_field('company_information_headline') or get_field('company_information')) : 
		
		$column_size = 'col-md-12';
		if (get_field('company_logo')) :
			$column_size = 'col-md-8';
		endif;
		
		?>
		
			<!-- Page intro -->
			<section class="container-fluid page-intro">
				<div class="row">
					
					<div class="container m-100">
						<div class="row">
							
							<div class="col-12 <?php echo $column_size; ?>">
								<h2 class="small-h2"><?php echo esc_html(get_field('company_information_headline')); ?></h2>
								<p class="large-p"><?php echo esc_html(get_field('company_information')); ?></p>
							</div>
							
							<?php if (get_field('company_logo')) : ?>
								<div class="col-md-4" >
									<div class="bg-image contain" style="background-image: url(<?php echo esc_url(get_field('company_logo')); ?>);"></div>
								</div>
							<?php endif; ?>
							
						</div>
					</div><!-- .page-intro -->
					
				</div>
			</section>
		
		<?php endif; ?>
		
		<!-- Our team -->
		<section class="container-fluid team">
			<div class="row">
				
				<div class="container m-100">
					
					<?php if (get_field('team_information_headline') or get_field('team_information')) : ?>
					<div class="row team-intro">
						<div class="col-12 col-md-8 m-auto">
							<h2 class="small-h2"><?php echo esc_html(get_field('team_information_headline')); ?></h2>
							<p class="large-p"><?php echo esc_html(get_field('team_information')); ?></p>
						</div>
					</div>
					<?php endif; ?>
				</div><!-- .team-intro -->
				
				<?php get_template_part( 'template-parts/modules/post-loop-team' ); ?>
				
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
