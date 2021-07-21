<?php 

// WP query for service cat pages
$args = array(
    'post_type' => 'page',
    'post_status' => 'publish',
    'post__not_in' => array(get_the_ID()), // exclude current service page from query
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-service.php',
        )
    )
);

$page_query = new WP_Query($args);

// post loop
if ($page_query->have_posts()) : ?>
	
	<section class="container-fluid related-services">
		<div class="row">
			<div class="container">
				<div class="row">
	
				<?php while ( $page_query->have_posts() ) : $page_query->the_post(); ?>
				
				<a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>" class="col-12 col-md-6">
					
					<?php if (get_field('ICONNAMEHERE')) : ?>
						<div class="related-service__icon"></div>
					<?php endif; ?>
					
					<p class="related-service__title"><?php echo esc_html(get_the_title()); ?></p>
					<h3 class="related-service__headline"><?php echo esc_html(get_field('page_custom_title', get_the_ID())); ?></h3>
				</a>

				<?php endwhile; ?>
		
				</div>
			</div>
		</div>
	</section>
	
<?php endif; ?>