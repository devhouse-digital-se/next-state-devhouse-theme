<section class="container-fluid home-hero bg-image" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full'));?>');">
	<div class="row">
	    
	    <div class="container">
	        <div class="row">
	        
	            <div class="col home-hero__content">
	            	<?php if (get_field('hero_subheadline')) : ?>
        				<h3 class="hero__sub-headline"><?php echo esc_html(get_field('hero_subheadline')); ?></h3>
        			<?php endif; ?>
        			
        			<h1 class="hero__headline"><?php echo esc_html(get_field('hero_headline')); ?></h1>
        			
        			<?php if (get_field('hero_text')) : ?>
        				<p class="hero__description"><?php echo get_field('hero_text'); ?></p>
        			<?php endif; ?>
        			
        			<?php if (get_field('hero_cta_text') && get_field('hero_cta_link')) : ?>
        				<a href="<?php echo esc_url(get_field('hero_cta_link')); ?>" class="d-block btn btn-primary"><?php echo esc_html(get_field('hero_cta_text')); ?></a>
        			<?php endif; ?>
        		</div>
	            
	        </div>
	    </div>
		
	</div>
</section>