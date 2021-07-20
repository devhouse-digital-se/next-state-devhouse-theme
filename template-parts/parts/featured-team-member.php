<?php

// variables
$post_id = get_field('featured_post');
if (get_field('featured_post') == NULL) :
	$post_id = get_the_ID();
endif;

$team_member = get_field('team_member', $post_id);

?>

<div class="entry-author">
	<div class="author-image bg-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($team_member));?>);"></div>
	<div class="author-meta">
		<p class="author-name"><?php echo esc_html(get_the_title($team_member)); ?></p>
		<p class="author-position"><?php echo esc_html(get_field('team_member_position', $team_member)); ?></p>
	</div>
</div>
