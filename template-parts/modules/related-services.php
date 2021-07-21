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
				
					<?php get_template_part( 'template-parts/parts/content-post-related' ); ?>

				<?php endwhile; ?>
		
				</div>
			</div>
		</div>
	</section>
	
<?php endif; ?>