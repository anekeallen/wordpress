<?php


get_header();
?>

	<section class="error-404 not-found twp-not-found twp-min-height">
		<div class="container">
			<header class="page-header">
				<div class="twp-error-title twp-secondary-color">404...</div>
				<h1><?php esc_html_e( 'Ops! Essa página não pode ser encontrada.', 'default-mag' ); ?></h2>
			</header><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Talvez tente um dos links abaixo ou uma pesquisa?', 'default-mag' ); ?></p>
	
				<?php get_search_form(); ?>
				 <?php the_widget( 'WP_Widget_Recent_Posts', $arrayName = array('title' => 'Latest Posts' , 'number' => 3 ) ); ?>
			</div>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

<?php
get_footer();
