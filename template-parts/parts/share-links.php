<!-- share icons -->
<div class="row share-icons">
	
	<div class="border m-auto"></div>
	
	<div class="col-12 d-inline-block">
		
		<p class="d-inline-block"><?php _e('Share article', 'nextstate-theme'); ?>:</p>
		
		<a 
			class="share-icon facebook bg-image d-inline-block" 
			href="#" 
			target="_blank"
			onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>','', '_blank, width=500, height=500, resizable=yes, scrollbars=yes'); return false;"
		>
		</a>
		
		<a 
			class="share-icon linkedin bg-image d-inline-block" 
			href="#" 
			target="_blank"
			onclick="window.open('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(); ?>&title=<?php echo esc_html(get_the_title()); ?>','', '_blank, width=500, height=500, resizable=yes, scrollbars=yes'); return false;"
		>
		</a>
		
		<a class="share-icon twitter bg-image d-inline-block" href="http://twitter.com/share?text=<?php echo esc_html(get_the_title()); ?>&url=<?php echo get_the_permalink(); ?>" target="_blank"></a>
		
	</div>
</div>