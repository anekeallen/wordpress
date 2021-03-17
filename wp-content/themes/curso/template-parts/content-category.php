<article <?php post_class(); ?>>
	
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
	<div class="meta-info">
		<p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
		
		<p><?php the_tags( 'Tags: ', ', ' ); ?></p>
	</div>			
	<a style="text-decoration: none; text-decoration-color: black" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
</article>