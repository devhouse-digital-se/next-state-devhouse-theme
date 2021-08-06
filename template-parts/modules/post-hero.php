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
					
					<?php if (get_field('news_archive_link', 'option')) : ?>
						<div class="return-to-page desktop-hidden">
							<a href="<?php echo esc_url(get_field('news_archive_link', 'option')); ?>"><?php echo __( '←  Back to all news', 'nextstate_theme' ); ?></a>
						</div>
					<?php endif; ?>
	
					<div class="article-wrapper d-flex align-items-sm-start align-items-lg-center">
						
						<?php if (get_field('news_archive_link', 'option')) : ?>
							<div class="return-to-page tablet-hidden mobile-hidden">
								<a href="<?php echo esc_url(get_field('news_archive_link', 'option')); ?>"><?php echo __( '←  Back to all news', 'nextstate_theme' ); ?></a>
							</div>
						<?php endif; ?>

						<div class="entry-content__wrapper">
							
							<div class="entry-meta"><?php echo $category; ?> • <?php echo $date; ?></div>
							
							<div class="entry-title"><h1 class="small-h1"><?php echo esc_html(get_the_title()); ?></h1></div>

							<?php
							
							// team member
							if (get_field('team_member')) : 
								
								get_template_part( 'template-parts/parts/featured-team-member');
								
							endif; 
							
							?>
							
						</div>
						
						<div class="entry-thumbnail bg-image">
							<?php echo get_the_post_thumbnail($featured_post, 'large'); ?>
						</div>
					
					</div>
					
				</section>
				
			</div>
		</div>
	</div>
</div>
