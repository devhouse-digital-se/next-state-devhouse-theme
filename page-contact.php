<?php
/**
 * Template Name: Contact
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
$hero_bg_img = esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));

?>

	<main id="primary" class="site-main">
		
		<!-- Contact hero -->
		<section class="container-fluid contact-hero m-100">
			
			<div class="row contact-hero__background bg-image" style="background-image: url(<?php echo $hero_bg_img; ?>);"></div>
			
			<div class="row">
				
				<div class="container contact-hero__information__wrapper">
					<div class="row">
						
						
						<div class="col-12 col-md-6 contact-hero__information">
							
							<?php if (get_field('page_custom_title')) : ?>
							<p class="contact-hero__intro-text"><?php echo esc_html(get_field('page_custom_title')); ?></p>
							<?php endif; ?>
							
							<?php if (get_field('page_intro_text')) : ?>
							<h1 class="contact-hero__headline"><?php echo esc_html(get_field('page_intro_text')); ?></h1>
							<?php endif; ?>
							
							<?php if (get_the_content()) : ?>
							<p class="contact-hero__text"><?php echo get_the_content(); ?></p>
							<?php endif; ?>
							
							<?php if ( have_rows('locations') ) : ?>
											
								<?php 
								
								$counter = 0;
								
								while( have_rows('locations') ) : the_row(); 
								
									if ($counter == 0) : ?>
							
									<div class="location hero-location">
										<?php get_template_part( 'template-parts/parts/content-location' ); ?>
									</div>
									
									<?php 
									
									$counter++;
									
									endif;
							        
								endwhile; ?>
											
							<?php endif; ?>
							
						</div>
						
						<?php if (get_field('contact_form_id')) : ?>
						<div class="col-12 col-md-6 contact-form">
							<div class="contact-form__wrapper">
								<?php echo FrmFormsController::show_form(get_field('contact_form_id'), $key = '', $title=false, $description=false); ?>
							</div>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
				
			</div>
		</section>
		
		<!-- Locations -->
		<?php if ( have_rows('locations') ) : ?>
		<section class="container-fluid contact-locations m-100">
			<div class="row">
				
				<div class="container">
					<div class="row">
						
						<?php while( have_rows('locations') ) : the_row(); ?>
					
							<div class="col-12 col-md-6 location" tabindex="0">
								<?php get_template_part( 'template-parts/parts/content-location' ); ?>
							</div>
					        
						<?php endwhile; ?>
						
					</div>
				</div>
		
			</div>
		</section>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
