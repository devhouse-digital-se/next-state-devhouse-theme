<div class="container">
	<div class="row d-flex align-items-center h-100">
		
		<div class="col site-logo">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->
		</div><!-- .site-logo -->
		
		<div class="col">
			<nav id="site-navigation" class="main-navigation">
				<a class="menu-toggle" id="nav-icon4" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</a>
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