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

	<?php get_template_part( 'template-parts/modules/page-hero' ); ?>

	<main id="primary" class="site-main">
		
		<?php 
		
		// page intro
		if (get_field('company_information_headline') or get_field('company_information')) : 
		
		$column_size = 'col-md-12';
		if (get_field('company_logo')) :
			$column_size = 'col-md-8';
		endif;
		
		?>
		
		<!-- Page intro -->
		<section class="container-fluid page-intro" tabindex="0">
			<div class="row">
				
				<div class="container m-100">
					<div class="row">
						
						<div class="col-12 col-md-8 m-auto <?php echo $column_size; ?>">
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
		<section class="container-fluid team team-intro__wrapper">
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

			</div>
			
			<div class="row">
				<?php get_template_part( 'template-parts/modules/post-loop-team' ); ?>
			</div>
			
		</section>
		
		<!-- About us - information rows -->
		<?php if( have_rows('information_rows_section') ): ?>
		<section class="container-fluid information-rows alternating-rows" tabindex="0">
			<div class="row">
				
				<div class="container m-100">

					<?php

				    // Loop through rows.
				    while( have_rows('information_rows_section') ) : the_row(); ?>
				
				        <article class="row alternating-row" tabindex="0">
								
							<div class="col-12 d-md-flex justify-content-md-between align-items-md-center">
							
								<div class="img-container">
									<img 
										src="<?php echo esc_url(get_sub_field('information_row_image')['url']); ?>" 
										alt="<?php echo get_sub_field('information_row_image')['alt']; ?>" 
									/>
								</div>
								
								<div class="alternating-row__meta">
									<h2 class="alternating-row__headline small-h2"><?php echo esc_html(get_sub_field('information_row_headline'));?></h2>
									<div class="alternating-row__description large-p"><?php echo get_sub_field('information_row_text'); ?></div>
								</div>
							
							</div>
							
						</article>
				
				    <?php endwhile; ?>
				    
				</div>

			</div>
			
		</section>
		<?php endif; ?>
		
		<!-- About us - information boxes -->
		<?php if( have_rows('information_boxes') ): ?>
		<section class="container-fluid info-boxes" tabindex="0">
			<div class="row">
				
				<div class="container m-100">
					
					<?php if (get_field('information_boxes_section_headline')) : ?>
					<div class="row team-intro">
						<div class="col-12 col-md-8 m-auto">
							<h2 class="small-h2"><?php echo esc_html(get_field('information_boxes_section_headline')); ?></h2>
						</div>
					</div>
					<?php endif; ?>
					
					<div class="row">
						
						<?php

					    // Loop through rows.
					    while( have_rows('information_boxes') ) : the_row(); ?>
					
					        <article class="col-12 col-lg-4 info-box" tabindex="0">
					        	<div class="info-box__wrapper">
					        		<div class="bg-image" style="background-image: url('<?php echo esc_url(get_sub_field('information_box_image')); ?>');"></div>
									<h2 class="info-box__headline"><?php echo esc_html(get_sub_field('information_box_headline'));?></h2>
									<p class="info-box__description large-p"><?php echo esc_html(get_sub_field('information_box_text', $services_cat)); ?></p>
								</div>
							</article>
					
					    <?php endwhile; ?>
					</div>
				</div>

			</div>
			
		</section>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
