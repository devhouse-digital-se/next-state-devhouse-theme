<section class="container-fluid page-intro">
	<div class="row">
		
		<div class="container m-100">
			<div class="row">
				
				<div class="col-8">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->

					</article><!-- #post-<?php the_ID(); ?> -->
				</div>
				
			</div>
		</div>
		
	</div>
</section>