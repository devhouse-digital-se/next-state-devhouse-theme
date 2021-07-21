<div class="article-wrapper">

	<div class="entry-content__wrapper">
		
		<div class="entry-thumbnail bg-image" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_id(), 'large')); ?>')"></div>

		<div class="entry-title"><h4><?php echo esc_html(get_the_title()); ?></h4></div>
		
		<?php if (get_field('team_member_position')) : ?>
		<p class="position"><?php echo esc_html(get_field('team_member_position')); ?></p>
		<?php endif; ?>
		
		<?php if (get_field('team_member_information')) : ?>
		<div class="team-member__information__wrapper">
			<p class="team-member__information" data-team-member="<?php echo get_the_ID(); ?>"><?php echo get_field('team_member_information'); ?></p>
			<a href="#" onclick="toggleTeamInfo(this, event)" data-team-member="<?php echo get_the_ID(); ?>"><?php echo __('Read more', 'nextstate-theme'); ?></a>
		</div>
		<?php endif; ?>
		
	</div>

</div>
	