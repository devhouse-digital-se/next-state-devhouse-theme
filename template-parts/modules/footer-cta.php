<?php 

if ( get_field('display_cta_initial') ) :

	if ( get_field('display_cta') == FALSE ) : 
		
		// Use global CTA content if override is not active
		$cta_image = get_field('cta_image', 'option');
		$cta_headline = get_field('cta_headline', 'option');
		$cta_text = get_field('cta_text', 'option');
		$cta_btn_text = get_field('cta_button_text', 'option');
		$cta_btn_link = get_field('cta_button_url', 'option');
		
	
	else : 
		
		// Use global CTA content
		$cta_image = get_field('cta_image');
		$cta_headline = get_field('cta_headline');
		$cta_text = get_field('cta_text');
		$cta_btn_text = get_field('cta_button_text');
		$cta_btn_link = get_field('cta_button_url');
		
	endif;
	
	?>
	<section class="container footer-cta">
		<div class="row">
			
			<div class="col-12">
		    
		    <div class="container">
		        <div class="row">
		        	
		        	<?php 
		        	// if cta without image
		        	if ( ! $cta_image) : ?>
		        
			            <div class="col-md-8 m-auto footer-cta__content">
		
		        			<h2 class="cta-headline"><?php echo $cta_headline; ?></h2>
		        			
		        			<?php if ($cta_text) : ?>
		        				<div class="cta-text large-p"><?php echo $cta_text; ?></div>
		        			<?php endif; ?>
		        			
		        			<?php if ($cta_btn_text && $cta_btn_link) : ?>
		        				<a href="<?php echo esc_url($cta_btn_link); ?>" class="d-block btn secondary m-auto"><?php echo esc_html($cta_btn_text); ?></a>
		        			<?php endif; ?>
		        			
		        		</div>
	        		
	        		<?php 
	        		// if cta with image
	        		else : ?>
	        		 
		        		<div class="col footer-cta__content cta-contains-image">
		        			
		        			<div class="row d-md-flex align-items-md-center">
		        				
		        				<div class="cta-image bg-image" style="background-image: url('<?php echo esc_url($cta_image); ?>');"></div>
		        				
		        				<div class="footer-cta__wrapper d-flex flex-column align-items-md-start flex-wrap">
		        					<h2 class="cta-headline"><?php echo $cta_headline; ?></h2>
		        			
				        			<?php if ($cta_text) : ?>
				        				<div class="cta-text large-p"><?php echo $cta_text; ?></div>
				        			<?php endif; ?>
				        			
				        			<?php if ($cta_btn_text && $cta_btn_link) : ?>
				        				<a href="<?php echo esc_url($cta_btn_link); ?>" class="d-block btn secondary"><?php echo esc_html($cta_btn_text); ?></a>
				        			<?php endif; ?>
		        				</div>
		        				
		        			</div>
		
		        		</div>
	        		
	        		<?php endif; ?>
		            
		        </div>
		    </div>
		    
		    </div>
			
		</div>
	</section>
<?php endif; ?>