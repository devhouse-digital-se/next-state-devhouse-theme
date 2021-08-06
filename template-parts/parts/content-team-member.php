<div class="article-wrapper" tabindex="0">

	<div class="entry-content__wrapper">
		
		<!-- team member image -->
		<div class="entry-thumbnail bg-image" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_id(), 'large')); ?>')"></div>

		<!-- team member name & position -->
		<div class="entry-title"><h4><?php echo esc_html(get_the_title()); ?></h4></div>
		
		<?php if (get_field('team_member_position')) : ?>
		<p class="position"><?php echo esc_html(get_field('team_member_position')); ?></p>
		<?php endif; ?>
		
		<!-- team member contact information -->
		<?php if (get_field('e-mail') or get_field('phone') or get_field('linkedin')) : ?>
		<div class="team-member__contact d-flex">
			
			<?php if (get_field('e-mail')) : ?>
			<a class="d-block bg-image contain email" href="mailto:<?php echo get_field('e-mail'); ?>"></a>
			<?php endif; ?>
			
			<?php if (get_field('phone')) : ?>
			<a class="d-block bg-image contain phone" href="tel:<?php echo get_field('phone'); ?>"></a>
			<?php endif; ?>
			
			<?php if (get_field('linkedin')) : ?>
			<a class="d-block bg-image linkedin" target="_blank" href="<?php echo esc_url(get_field('linkedin')); ?>"></a>
			<?php endif; ?>
			
		</div>
		<?php endif; ?>
		
		<!-- team member information -->
		<?php if (get_field('team_member_information')) : ?>
		<div class="team-member__information__wrapper">
			<p class="team-member__information full" data-team-member="<?php echo get_the_ID(); ?>"><?php echo get_field('team_member_information'); ?></p>
			<p class="team-member__information intro" data-team-member="<?php echo get_the_ID(); ?>"><?php echo wp_trim_words(get_field('team_member_information'), 15, '...'); ?></p>
			<a href="#" onclick="toggleTeamInfo(this, event)" data-team-member="<?php echo get_the_ID(); ?>">
				<p class="large-p closed"><?php echo __('Read more', 'nextstate-theme'); ?></p>
				<p class="large-p opened"><?php echo __('Read less', 'nextstate-theme'); ?></p>
			</a>
		</div>
		<?php endif; ?>
		
	</div>

</div>
	