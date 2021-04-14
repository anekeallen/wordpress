<?php


get_header();
?>

<section class="error-404 not-found twp-not-found twp-min-height">
	<div class="container">
		<header class="page-header">
			<div class="twp-error-title twp-secondary-color">404...</div>
			<h1><?php _e( '
			Oops! This page cannot be found.', 'wpcurso' ); ?></h2>
		</header><!-- .page-header -->
		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or search?', 'wpcurso' ); ?></p>

			<?php get_search_form(); ?>
			<?php the_widget( 'WP_Widget_Recent_Posts', $arrayName = array('title' => __('Latest Posts','wpcurso') , 'number' => 3 ) ); ?>
		</div>
	</div><!-- .page-content -->
</section><!-- .error-404 -->

<?php
get_footer();
