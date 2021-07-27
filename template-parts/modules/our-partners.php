<?php
// Check rows exists.
if( have_rows('our_partners') ): ?>
	
	<section class="container-fluid our-partners m-100">
		<div class="row">
	    
	    	<div class="container">
	    		
	    		<div class="row">
	    			<h3 class="section-headline"><?php echo esc_html(get_field('our_partners_headline')); ?></h3>
	    		</div>
	    		
	        	<div class="row">
	        		<div class="slick partners col-md-8 m-auto">

						<?php
					    // Loop through rows.
					    while( have_rows('our_partners') ) : the_row();
					        
					        ?>
					        
					        <div class="partner-item">
					        	<?php if (get_sub_field('partner_url')) : ?>
					        		<a title="<?php echo esc_url(get_sub_field('partner_url')); ?>" href="<?php echo esc_url(get_sub_field('partner_url')); ?>" target="_blank">
					        			<div class="partner-item__image" style="background-image: url(<?php echo esc_html(get_sub_field('partner_logo')); ?>);"></div>
					        		</a>
					        	<?php else : ?>
					        		<div class="partner-item__image" style="background-image: url(<?php echo esc_html(get_sub_field('partner_logo')); ?>);"></div>
					        	<?php endif; ?>
					        </div>
					        
					        <?php
					
					    // End loop.
					    endwhile; ?>
				    
				    </div>
			    </div>
			    
	    	</div>
		
		</div>
	</section>
	
<?php
// No value.
else :
    // Do something...
endif;
?>