<?php
// variables
$category = get_the_category()[0]->cat_name;
$date = get_the_date( 'F d Y' );

?>

<div class="container-fluid post-hero">
	<div class="row">
		<div class="container">
			<div class="row">
				
				<section class="col-12">
	
					<div class="article-wrapper d-flex align-items-center">

						<div class="entry-content__wrapper">
							
							<div class="entry-meta"><?php echo $category; ?> • <?php echo $date; ?></div>
							
							<div class="entry-title"><h1 class="small-h1"><?php echo get_the_title(); ?></h1></div>

							<?php
							
							// team member
							if (get_field('team_member')) : 
								
								get_template_part( 'template-parts/featured-team-member');
								
							endif; 
							
							?>
							
						</div>
						
						<div class="entry-thumbnail bg-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($featured_post, 'large'); ?>')"></div>
					
					</div>
					
				</section>
				
			</div>
		</div>
	</div>
</div>
