<?php
// Check rows exists.
if( have_rows('our_values') ): ?>
	
	<section class="container-fluid info-boxes">
		<div class="row">
	    
	    	<div class="container m-100">
	        	<div class="row">

					<?php
				    // Loop through rows.
				    while( have_rows('our_values') ) : the_row();
				        
				        ?>
				        
				        <div class="col-md-4 info-box">
				        	<div class="info-box__wrapper">
					        	<div class="bg-image" style="background-image: url('<?php echo esc_url(get_sub_field('value_image')); ?>');"></div>
					        	<h2><?php echo esc_html(get_sub_field('value_headline')); ?></h2>
					        	<p class="large-p"><?php echo esc_html(get_sub_field('value_text')); ?></p>
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

?>