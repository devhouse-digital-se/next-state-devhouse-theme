<?php

// variables
$featured_post = get_field('featured_post');
$category = get_the_category($featured_post)[0]->cat_name;
$date = get_the_date( 'F d Y', $featured_post );

?>

<article id="post-<?php $featured_post; ?>" class="col-12 col-lg-12 m-auto">
	
	<div class="article-wrapper d-md-flex align-items-center justify-content-md-between">
		
		<a href="<?php echo esc_url(get_the_permalink($featured_post)); ?>" title="<?php echo esc_html(get_the_title($featured_post)); ?>">
			<div class="entry-thumbnail bg-image" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($featured_post, 'large')); ?>')"></div>
		</a>
	
		<div class="entry-content__wrapper">
			
			<div class="entry-meta"><?php echo $category; ?> • <?php echo $date; ?></div>
			
			<a style="text-decoration: none;" href="<?php echo esc_url(get_the_permalink($featured_post)); ?>" title="<?php echo esc_html(get_the_title($featured_post)); ?>">
				<div class="entry-title"><h2><?php echo esc_html(get_the_title($featured_post)); ?></h2></div>
			</a>
			
			<div class="entry-content">
				<?php echo wp_trim_words(get_the_excerpt($featured_post), 25, '...'); ?>
			</div>
			
			<?php
			
			// team member
			if (get_field('team_member', $featured_post)) : 
				
				get_template_part( 'template-parts/parts/featured-team-member');
				
			endif; 
			
			?>
			
		</div>
	
	</div>
	
</article>
