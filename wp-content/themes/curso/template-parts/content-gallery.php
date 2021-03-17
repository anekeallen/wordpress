<article <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('imagem-media'); ?></a>
	
	<p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
	
</article>