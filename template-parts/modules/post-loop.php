<?php 

$posts_to_display = get_field('posts_to_display');

if ($posts_to_display && $posts_to_display != 0) :

	// wp query for posts
	$args = [
	    'post_type' => 'post',
	    'posts_per_page' => $posts_to_display,
	    'orderby' => 'date',
	    'order' => 'DESC',
	];
	$query = new WP_Query( $args );
	
	// post loop
	if ($query->have_posts()) :
		
		echo '<section class="container-fluid m-100 latest-posts">';
		echo '<section class="row">';
		echo '<section class="container">';
		echo '<div class="post-grid row">';
		
		while ( $query->have_posts() ) : $query->the_post();
		
			echo '<article id="post-' . get_the_ID() . '" class="col-12 col-md-4" tabindex="0">';
	
			get_template_part( 'template-parts/parts/content-post');
		
			echo '</article>';
			
		endwhile;
		
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		
	endif;
	
	// reset wp query
	wp_reset_query();

endif;

?>