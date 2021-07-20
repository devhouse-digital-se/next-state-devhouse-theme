<?php
// Check rows exists.
if( have_rows('our_values') ): ?>
	
	<section class="container-fluid our-values m-100">
		<div class="row">
	    
	    	<div class="container">
	        	<div class="row">

					<?php
				    // Loop through rows.
				    while( have_rows('our_values') ) : the_row();
				        
				        ?>
				        
				        <div class="col-md-4 value-item">
				        	<div class="value-item__wrapper">
					        	<div class="value-img bg-image" style="background-image: url('<?php echo get_sub_field('value_image'); ?>');"></div>
					        	<h3><?php echo get_sub_field('value_headline'); ?></h3>
					        	<p class="large-p"><?php echo get_sub_field('value_text'); ?></p>
				        	</div>
				        </div>
				        
				        <?php
				
				    // End loop.
				    endwhile; ?>
				    
			    </div>
	    	</div>
		
		</div>
	</section>
	
<?php
// No value.
else :
    // Do something...
endif;