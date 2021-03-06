<?php
// variables
$category = get_the_category()[0]->cat_name;
$date = get_the_date( 'F d Y' );

?>

<div class="article-wrapper">

	<div class="entry-content__wrapper">
		
		<a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>">
			<div class="entry-thumbnail">
				<?php echo get_the_post_thumbnail($services_cat, 'large'); ?>
			</div>
		</a>
		
		<div class="entry-meta__wrapper">
			<div class="entry-meta"><?php echo $category; ?> • <?php echo $date; ?></div>
			
			<a style="text-decoration: none;" href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>">
				<div class="entry-title"><h4><?php echo esc_html(get_the_title()); ?></h4></div>
			</a>
			
			<div class="entry-content">
				<?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
			</div>
			
			<div class="read-more">
				<a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>"><?php echo __('Read more', 'nextstate-theme'); ?></a>
			</div>
		</div>
	</div>

</div>
	