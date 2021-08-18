<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Next_State_Theme
 */

?>

	<?php get_template_part( 'template-parts/modules/footer-cta'); ?>

	<footer id="colophon" class="site-footer">
		<section class="container-fluid footer-content m-100">
			<div class="row">
				
				<div class="container">
					
					<div class="row">
						
						<!-- footer logo -->
						<div class="col-12">
							<div class="footer-logo">
								<?php the_custom_logo(); ?>
							</div>
						</div>
						
					</div>
					
					<div class="row d-flex justify-content-between">
						
						<!-- footer column 1 -->
						<div class="col-lg-4 footer-meta">
							
							<?php if (get_field('footer_about_text', 'option')) : ?>
								<p class="footer-about"><?php echo esc_html(get_field('footer_about_text', 'option')); ?></p>
							<?php endif; ?>
							
							<?php if (get_field('footer_copyright_text', 'option')) : ?>
								<p class="copyright mobile-hidden tablet-hidden">© <?php echo date("Y"); ?> <?php echo esc_html(get_field('footer_copyright_text', 'option')); ?></p>
							<?php endif; ?>
								
							<?php if (get_field('footer_link_url', 'option') && get_field('footer_link_text', 'option')) : ?>	
								<p class="footer-link"><a href="<?php echo get_field('footer_link_url', 'option'); ?>"><?php echo esc_html(get_field('footer_link_text', 'option')); ?></a></p>
							<?php endif; ?>
						
						</div>
						
						<!-- footer column 2 -->
						<div class="col-lg-4 footer-menu">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</div>
						
						<!-- footer column 3 -->
						<div class="col-lg-4 footer-contact">
							
							<?php if (get_field('footer_phone_number', 'option')) : ?>
								<a class="phone" href="tel:<?php echo esc_html(get_field('footer_phone_number', 'option')); ?>">
									<p><?php echo esc_html(get_field('footer_phone_number', 'option')); ?></p>
								</a>
							<?php endif; ?>
							
							<?php if (get_field('footer_e-mail', 'option')) : ?>
								<a class="email" href="mailto:<?php echo esc_html(get_field('footer_e-mail', 'option')); ?>">
									<p><?php echo esc_html(get_field('footer_e-mail', 'option')); ?></p>
								</a>
							<?php endif; ?>
							
							<div class="footer-social d-flex">
							<?php

								echo '<div class="follow-us__text large-p">Follow us</div>';

								// Check rows exists.
								if( have_rows('social_media_links', 'option') ):
								
								    // Loop through rows.
								    while( have_rows('social_media_links', 'option') ) : the_row();
								
								        // Load sub field value.
								        $icon_link = get_sub_field('social_media_url');
								        $icon_image = get_sub_field('social_media_image_icon_url');
								        // Do something...
								        
								        echo '<a class="bg-image" title="' . esc_url($icon_link) . '" target="_blank" href="' . esc_url($icon_link) . '" style="background-image: url(' . esc_url($icon_image) . ');"></a>';
								
								    // End loop.
								    endwhile;
								
								// No value.
								else :
								    // Do something...
								endif;
								
							?>	
						</div>
					
						</div>
						
						<div class="col-12 desktop-hidden">
							
							<?php if (get_field('footer_copyright_text', 'option')) : ?>
								<p class="copyright">© <?php echo date("Y"); ?> <?php echo esc_html(get_field('footer_copyright_text', 'option')); ?></p>
							<?php endif; ?>
								
						</div>
						
					</div>
				</div>
				
			</div>
		</section>
		
		<?php

		// Footer award section
		if( have_rows('footer_logos_and_awards', 'option') ): ?>
		
		<!-- Awards section -->
		<section class="container-fluid footer-content__awards m-50">
			<div class="row">
				
				<div class="container">
					
					<div class="col-md-10">
					
						<div class="row d-flex">
							
						<?php
						
						// Total columns
						$columns = '';
						$total_items = count(get_field('footer_logos_and_awards', 'option'));
						$columns = floor(12/$total_items);
						
					    // Loop through rows.
					    while( have_rows('footer_logos_and_awards', 'option') ) : the_row();
					
					        // Load sub field value.
					        $logo_url = get_sub_field('footer_award_logo');
					        // Do something...
					        
					        echo '<div class="award bg-image contain col-' . $columns . '" style="background-image: url(' . $logo_url['url'] . ');"></div>';
	
					    // End loop.
					    endwhile; ?>
	
						</div>
					
					</div>
					
				</div>
				
			</div>
		</section>
		
		<?php endif; ?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="/wp-content/themes/next_state/js/mhead.js"></script>

</body>
</html>
