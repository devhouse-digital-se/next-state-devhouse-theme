<?php 

// post grid title
if (get_field('post_grid_title')) :
	echo '<div class="row"><h2 class="small-h2 m-auto">' . esc_html(get_field('post_grid_title')) . '</h2></div>';
endif;

// if FacetWP is active and loop type is grid, enable filtering
if (function_exists('facetwp_display')) :
	
	// enable fwp query var
	$enable_fwp = true;
	// reduce posts per page to 9
	$posts_to_display = 9;

	// display fwp filter
	echo facetwp_display('facet', 'categories');

endif;

// wp query for posts
$args = [
    'post_type' => 'post',
    'posts_per_page' => $posts_to_display,
    'orderby' => 'date',
    'order' => 'DESC',
    'facetwp' => $enable_fwp, // we added this
    'post__not_in' => array(get_field('featured_post')),
];
$query = new WP_Query( $args );

// post loop
if ($query->have_posts()) :
	
	echo '<div class="post-grid row">';
	
	while ( $query->have_posts() ) : $query->the_post();
	
		echo '<article id="post-' . get_the_ID() . '" class="col-12 col-md-6 col-lg-4">';
	
		get_template_part( 'template-parts/parts/content-post');
	
		echo '</article>';
	
	endwhile;
	
	echo '</div>';
	
endif;

// if FacetWP is active and loop type is grid, enable pagination
if (function_exists('facetwp_display')) :
	
	echo facetwp_display('facet', 'post_pagination');

endif; 

// reset wp query
wp_reset_query();

?>