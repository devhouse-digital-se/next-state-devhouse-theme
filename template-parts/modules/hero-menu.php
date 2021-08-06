<?php 

$services_category = get_field('selected_service_category', get_the_ID())->slug;
$menu_alignment = get_field('section_navigation_position', get_the_ID());
if ($menu_alignment == NULL) : 
	$menu_alignment = 'justify-content-end';
endif;
$display_numbers = '';
if (get_field('display_numbers', get_the_ID()) == 1) :
	$display_numbers = 'display-numbers';
endif;

if ($services_category) :
	
	// wp query for posts
	$args = [
	    'post_type' => 'services',
	    'posts_per_page' => -1,
	    'orderby' => 'menu_order',
	    'order' => 'ASC',
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'solution_categories',
	            'field' => 'slug',
	            'terms' => $services_category,
	        )
	    ),
	];
	$query = new WP_Query( $args );
	
	// post loop
	if ($query->have_posts()) : ?>
		
		<section class="container-fluid hero-menu">
			<div class="row">
				<div class="container">
					<div class="row">
						<ul class="hero-menu__wrapper col-12 d-flex <?php echo $menu_alignment; ?>">
							
						<?php
						
						$section_title = get_field('section_navigation_names');
						$loop_count = 1;
						
						while ( $query->have_posts() ) : $query->the_post(); ?>
						
							<!-- service item -->
							<li class="hero-menu__item-wrap">
								<a href="#<?php echo get_post_field( 'post_name', get_the_ID() ); ?>" class="hero-menu__item" title="<?php echo esc_html(get_the_title());?>"><?php echo esc_html($section_title . ' ' . $loop_count); ?></a>
							</li>
							
							<?php $loop_count++; ?>
							
						<?php endwhile; ?>
					
						</ul>
					</div>
				</div>
			</div>
		</section>
	
	<?php	
	endif;
	
	// reset wp query
	wp_reset_query();

endif;

?>