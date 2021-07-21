<?php 

// get team member categories
$team_categories = get_terms('team_member_categories');

// loop through categories and display team members assigned to that category
if ($team_categories) :
	
	echo '<div class="container team-grid post-grid">';
	
	foreach($team_categories as $team_category) :
		
		// display section title
		?>
		<div class="row section-title">
			<div class="col-12">
				<h4><?php echo $team_category->name; ?></h4>
			</div>
		</div>

		<?php
		// wp query for posts
		$args = [
		    'post_type' => 'team_member',
		    'posts_per_page' => -1,
		    'orderby' => 'date',
		    'order' => 'DESC',
		    'tax_query' => array(
		        array(
		            'taxonomy' => 'team_member_categories',
		            'field'    => 'slug',
		            'terms'    => $team_category->slug,
		        ),
		    ),
		];
		$query = new WP_Query( $args );
		
		// post loop for each team member
		if ($query->have_posts()) :
			
			echo '<div class="' . $team_category->slug . ' row d-inline-block">';
			
			while ( $query->have_posts() ) : $query->the_post();
			
				echo '<article id="post-' . get_the_ID() . '" class="col-12 col-md-6 col-lg-4 d-inline-block">';
			
					get_template_part( 'template-parts/parts/content-team-member');
			
				echo '</article>';
			
			endwhile;
			
			echo '</div>';
			
		endif;
		
		// reset wp query
		wp_reset_query();
		
	endforeach;
	
	echo '</div>';
	
endif;

?>