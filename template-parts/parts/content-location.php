<div class="location-wrapper">

	<div class="location-content__wrapper d-flex flex-column justify-content-between">
		
		<!-- team member name & position -->
		<div>
		
			<h4 class="entry-title" ><?php echo esc_html(get_sub_field('location_headline')); ?></h4>
			
			<ul class="location-information">
			
				<?php if (get_sub_field('location_address')) : ?>
				<li class="address">
					<?php if (get_sub_field('location_google_maps_link')) : ?>
					<a href="<?php echo esc_url(get_sub_field('location_google_maps_link')); ?>" target="_blank">
					<?php endif; ?>
						<p><?php echo get_sub_field('location_address'); ?></p>
					<?php if (get_sub_field('location_google_maps_link')) : ?>
					</a>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				
				<?php if (get_sub_field('location_phone_number')) : ?>
				<li class="phone">
					<a href="tel:<?php echo esc_html(get_sub_field('location_phone_number')); ?>"><?php echo esc_html(get_sub_field('location_phone_number')); ?></a>
				</li>
				<?php endif; ?>
				
				<?php if (get_sub_field('location_email_address')) : ?>
				<li class="email">
					<a href="mailto:<?php echo esc_html(get_sub_field('location_email_address')); ?>"><?php echo esc_html(get_sub_field('location_email_address')); ?></a>
				</li>
				<?php endif; ?>
			
			</ul>
		
		</div>
		
		<?php 
		
		if (get_sub_field('location_team_member')) : 
			get_template_part( 'template-parts/parts/featured-team-member' );
		endif; 
		
		?>
		
	</div>

</div>
	