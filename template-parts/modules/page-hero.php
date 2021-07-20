<section class="container-fluid home-hero bg-image" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));?>');">
	<div class="row">
	    
	    <div class="container">
	        <div class="row">
	        
	            <div class="col home-hero__content">
	            	
	            	<?php // get the page title
            		$page_title = get_the_title();
            		if (get_field('page_custom_title')) :
            			$page_title = get_field('page_custom_title');
            		endif;
	            	?>

        			<h1 class="hero__headline"><?php echo esc_html($page_title); ?></h1>
        			
        			<?php if (get_field('page_intro_text')) : ?>
        				<p class="hero__description"><?php echo esc_html(get_field('page_intro_text')); ?></p>
        			<?php endif; ?>

        		</div>
	            
	        </div>
	    </div>
		
	</div>
</section>