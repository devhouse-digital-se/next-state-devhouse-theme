<?php 

$services_category = get_field('selected_service_category', get_the_ID())->slug;
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
	if ($query->have_posts()) :
		
		// start of service items grid
		echo '<section class="container-fluid services-grid ' . $display_numbers . '">';
		
		// number counter
		$service_number = 1;
		
		while ( $query->have_posts() ) : $query->the_post(); ?>
		
			<!-- service item -->
			<div class="row service-item" id="<?php echo get_post_field( 'post_name', get_the_ID() ); ?>">
				<div class="container">
					<div class="row service-item__wrapper flex-column-reverse flex-md-row">
						
						<?php 
						// adjust column size if no featured image is present
						$column_size = 'col-md-12';
						if ( get_the_post_thumbnail_url(get_the_ID(), 'large') ) : 
							$column_size = 'col-md-6';
						endif;
						?>
						
						<div class="col-12 <?php echo $column_size; ?> service-item__meta d-flex">
							
							<div class="service-item__number">
								<div><?php echo $service_number;?></div>
							</div>
							
							<div class="service-item__text">
								<div class="d-flex align-items-center">
									
									<div class="service-item__number">
										<div><?php echo $service_number;?></div>
									</div>
									<h2 class="service-item__title small-h2"><?php echo esc_html(get_the_title(get_the_ID())); ?></h2>
									
								</div>
								<div class="service-item__description large-p"><?php echo wpautop(get_the_content(get_the_ID())); ?></div>
							</div>
							
						</div>
						
						<?php if (get_the_post_thumbnail_url(get_the_ID(), 'large')) : ?>
						<div class="col-12 col-md-6">
							<div class="bg-image contain" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>);"></div>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
			
			<?php
			// number counter
			$service_number++;
		
		endwhile;
		
		echo '</section>';
		
	endif;
	
	// reset wp query
	wp_reset_query();

endif;

?>