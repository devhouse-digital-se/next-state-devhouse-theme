<?php 

// variables
$enable_fwp = false;
$posts_to_display = -1;
$loop_type = $args['loop-type'];

// if FacetWP is active and loop type is grid, enable filtering
if (function_exists('facetwp_display') && $loop_type == 'grid') :
	
	// enable fwp query var
	$enable_fwp = true;
	// reduce posts per page to 9
	$posts_to_display = 9;

	// display fwp filter
	echo facetwp_display('facet', 'categories');

endif;

// if loop type is featured then alter query args
if ($loop_type == 'featured') :
	$posts_to_display = 1;
endif;

// query args
$args = [
    'post_type' => 'post',
    'posts_per_page' => $posts_to_display,
    'orderby' => 'date',
    'order' => 'DESC',
    'facetwp' => $enable_fwp, // we added this
];
$query = new WP_Query( $args );

// post loop
if ($query->have_posts()) :
	
	echo '<div class="post-grid row">';
	
	while ( $query->have_posts() ) : $query->the_post();
	
		get_template_part( 'template-parts/content-post');
		
	endwhile;
	
	echo '</div>';
	
endif;

// if FacetWP is active and loop type is grid, enable pagination
if (function_exists('facetwp_display') && $loop_type == 'grid') :
	
	echo facetwp_display('facet', 'post_pagination');

endif; ?>