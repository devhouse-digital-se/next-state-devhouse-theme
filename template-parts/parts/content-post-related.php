<!-- related post content -->
<div class="col-12 col-md-6 related-service__wrapper">
	<a class="related-service d-flex flex-column justify-content-end" href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_html(get_the_title()); ?>">
		
		<?php if (get_field('service_category_icon', get_the_ID())) : ?>
			<div class="related-service__icon bg-image contain" style="background-image: url(<?php echo esc_url(get_field('service_category_icon', get_the_ID())); ?>"></div>
		<?php endif; ?>
		
		<p class="related-service__title"><?php echo esc_html(get_the_title()); ?></p>
		<h3 class="related-service__headline large-h3"><?php echo esc_html(get_field('page_custom_title', get_the_ID())); ?></h3>
	</a>
</div>
