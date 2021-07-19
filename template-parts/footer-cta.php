<?php if (get_field('display_cta') == TRUE) : ?>
	<section class="container footer-cta m-100">
		<div class="row">
		    
		    <div class="container">
		        <div class="row">
		        	
		        	<?php 
		        	// if cta without image
		        	if ( ! get_field('cta_image')) : ?>
		        
			            <div class="col-md-8 m-auto footer-cta__content">
		
		        			<h2 class="cta-headline"><?php echo get_field('cta_headline'); ?></h2>
		        			
		        			<?php if (get_field('cta_text')) : ?>
		        				<p class="cta-text large-p"><?php echo get_field('cta_text'); ?></p>
		        			<?php endif; ?>
		        			
		        			<?php if (get_field('cta_button_text') && get_field('cta_button_url')) : ?>
		        				<a href="<?php echo esc_url(get_field('cta_button_url')); ?>" class="d-block btn btn-primary m-auto"><?php echo get_field('cta_button_text'); ?></a>
		        			<?php endif; ?>
		        			
		        		</div>
	        		
	        		<?php 
	        		// if cta with image
	        		else : ?>
	        		 
		        		<div class="col footer-cta__content cta-contains-image">
		        			
		        			<div class="row d-flex">
		        				
		        				<div class="cta-image bg-image" style="background-image: url('<?php echo get_field('cta_image'); ?>');"></div>
		        				
		        				<div class="footer-cta__wrapper">
		        					<h2 class="cta-headline"><?php echo get_field('cta_headline'); ?></h2>
		        			
				        			<?php if (get_field('cta_text')) : ?>
				        				<p class="cta-text large-p"><?php echo get_field('cta_text'); ?></p>
				        			<?php endif; ?>
				        			
				        			<?php if (get_field('cta_button_text') && get_field('cta_button_url')) : ?>
				        				<a href="<?php echo esc_url(get_field('cta_button_url')); ?>" class="d-block btn btn-primary"><?php echo get_field('cta_button_text'); ?></a>
				        			<?php endif; ?>
		        				</div>
		        				
		        			</div>
		
		        		</div>
	        		
	        		<?php endif; ?>
		            
		        </div>
		    </div>
			
		</div>
	</section>
<?php endif; ?>