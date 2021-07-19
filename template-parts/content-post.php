<?php
// variables
$category = get_the_category()[0]->cat_name;
$date = get_the_date( 'F d Y' );

?>

<article id="post-<?php the_ID(); ?>" class="col-12 col-sm-12 col-md-6 col-lg-4">
	
	<div class="article-wrapper">
	
		<div class="entry-content__wrapper">
			
			<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
				<div class="entry-thumbnail bg-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id(), 'large'); ?>')"></div>
			</a>
			
			<div class="entry-meta"><?php echo $category; ?> • <?php echo $date; ?></div>
			
			<a style="text-decoration: none;" href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
				<div class="entry-title"><h4><?php echo get_the_title(); ?></h4></div>
			</a>
			
			<div class="entry-content">
				<?php echo get_the_excerpt(); ?>
			</div>
			
			<div class="read-more">
				<a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">Read more →</a>
			</div>
			
		</div>
	
	</div>
	
</article>
