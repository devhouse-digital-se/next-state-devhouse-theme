<?php

$services = get_field('services_categories');

if ($services) : ?>
	
	<section class="container-fluid service-categories m-100">
		<div class="row">
			<div class="col-12">
				
				<div class="container">
					<div class="row">
						
						<div class="col-12 service-categories__wrapper alternating-rows">
							
							<?php // solution category loop
							
							foreach($services as $services_cat) : ?>
							
								<article class="row alternating-row">
									
									<div class="col-12 d-md-flex justify-content-md-between align-items-md-center">
									
										<div class="bg-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($services_cat, 'large')); ?>);"></div>
										
										<div class="alternating-row__meta">
											<p class="alternating-row__title"><?php echo esc_html(get_the_title($services_cat)); ?></p>
											<h2 class="alternating-row__headline small-h2"><?php echo esc_html(get_field('page_custom_title', $services_cat));?></h2>
											<p class="alternating-row__description large-p"><?php echo esc_html(get_post_field('page_intro_text', $services_cat)); ?></p>
											<div class="read-more">
												<a href="<?php echo esc_url(get_the_permalink($services_cat)); ?>" title="<?php echo esc_html(get_the_title($services_cat)); ?>"><?php echo __('Learn more →', 'nextstate-theme'); ?></a>
											</div>
										</div>
									
									</div>
									
								</article>
							
							<?php endforeach; ?>
							
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
<?php endif; ?>