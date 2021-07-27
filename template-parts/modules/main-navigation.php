<div class="container">
	<div class="row d-flex align-items-center h-100">
		
		<div class="col site-logo">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->
		</div><!-- .site-logo -->
		
		<div class="col">
			<nav id="site-navigation" class="main-navigation">
				<button class="hamburger hamburger--squeeze menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
					<span class="hamburger-box">
					<span class="hamburger-inner"></span>
					</span>
				</button>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
	
			</nav><!-- #site-navigation -->
		</div><!-- .col -->
		
	</div><!-- .row -->
</div><!-- .container-->