<?php 

// get team member categories
$team_categories = get_terms('team_member_categories');

// loop through categories to generate filtering option buttons
if ($team_categories) :
	
	echo '<div class="container team-grid__filter" data-name="team-categories">';
	
	echo '<div class="team-grid__filter-item checked" data-value="all">' . __('All', 'nextstate-theme') . '</div>';
	
	foreach($team_categories as $team_category) :
		
		// display section title
		?>
		<div class="team-grid__filter-item" data-value="<?php echo $team_category->slug; ?>"><?php echo $team_category->name; ?></div>

		<?php
		
	endforeach;
	
	echo '</div>';
	
endif;

// loop through categories and display team members assigned to that category
if ($team_categories) :
	
	foreach($team_categories as $team_category) :
		
		// section container
		echo '<div class="container team-grid post-grid" data-value="' . $team_category->slug . '">';
		
		// display section title
		?>
		<div class="row section-title">
			<div class="col-12">
				<h3><?php echo $team_category->name; ?></h3>
			</div>
		</div>

		<?php
		// wp query for posts
		$args = [
		    'post_type' => 'team_member',
		    'posts_per_page' => -1,
		    'orderby' => 'title',
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
			
			echo '<div class="row team-category__row ' . $team_category->slug . ' d-md-inline-block" data-items="' . $query->found_posts . '">';
			
			while ( $query->have_posts() ) : $query->the_post();
			
				echo '<article id="post-' . get_the_ID() . '" class="col-12 col-md-6 col-lg-4 d-md-inline-block">';
			
					get_template_part( 'template-parts/parts/content-team-member');
			
				echo '</article>';
			
			endwhile;
			
			echo '</div>';
			
		endif;
		
		// reset wp query
		wp_reset_query();
		
		echo '</div>';
	
	endforeach;
	
endif;

?>