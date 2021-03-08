<article <?php post_class(); ?>>
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail('imagem-media'); ?>
	
	<p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
	
</article>