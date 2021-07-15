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

	<?php get_template_part( 'template-parts/footer-cta'); ?>

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
						<div class="col-md-4 footer-meta">
							
							<?php if (get_field('footer_about_text', 'option')) : ?>
								<p class="footer-about"><?php echo get_field('footer_about_text', 'option'); ?></p>
							<?php endif; ?>
							
							<?php if (get_field('footer_copyright_text', 'option')) : ?>
								<p class="copyright">© <?php echo date("Y"); ?> <?php echo get_field('footer_copyright_text', 'option'); ?></p>
							<?php endif; ?>
								
							<?php if (get_field('footer_link_url', 'option') && get_field('footer_link_text', 'option')) : ?>	
								<p class="footer-link"><a href="<?php echo get_field('footer_link_url', 'option'); ?>"><?php echo get_field('footer_link_text', 'option'); ?></a></p>
							<?php endif; ?>
						
						</div>
						
						<!-- footer column 2 -->
						<div class="col-md-4 footer-menu">
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
						<div class="col-md-3 footer-contact">
							
							<?php if (get_field('footer_phone_number', 'option')) : ?>
								<p class="phone">
									<a href="tel:<?php echo get_field('footer_phone_number', 'option'); ?>">
										
										<?php echo get_field('footer_phone_number', 'option'); ?>
									</a>
								</p>
							<?php endif; ?>
							
							<?php if (get_field('footer_e-mail', 'option')) : ?>
								<p class="email">
									<a href="mailto:<?php echo get_field('footer_e-mail', 'option'); ?>">
										<i src="/wp-content/themes/next_state/inc/images/email-icon.ico"></i>
										<?php echo get_field('footer_e-mail', 'option'); ?>
									</a>
								</p>
							<?php endif; ?>
					
						</div>
						
						<!-- footer column 4 -->
						<div class="col-md-1 footer-social">
							link<br>
							icon
						</div>
						
					</div>
				</div>
				
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
