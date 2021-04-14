<?php get_header(); ?>
<div class="content-area">
	<main>
		<section class="slide">
			
			<?php 

			$design = get_theme_mod('set_slider_option');
			$limit = get_theme_mod('set_slider_limit');
			echo do_shortcode('[recent_post_slider design="design-' .$design. '" limit="'.$limit.'"]') ?>			
		</section>
		<section class="services">
			<div class="container">
				<h1>Our Services</h1>
				<div class="row">
					<div class="col-sm-4">
						<div class="services-item">
							<?php if (is_active_sidebar('services-1')):
								dynamic_sidebar( 'services-1' )
								?>

							<?php endif ?>
						</div>
					</div>				
					<div class="col-sm-4">	
						<div class="services-item">
							<?php if (is_active_sidebar('services-1')):
								dynamic_sidebar( 'services-2' )
								?>	

							<?php endif ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="services-item">
							<?php if (is_active_sidebar('services-1')):
								dynamic_sidebar( 'services-3' )
								?>

							<?php endif ?>
						</div>
					</div>							
				</div>
			</div>				
		</section>
		<section class="middle-area">
			<div class="container">	
				<div class="row">
					<?php get_sidebar('home'); ?>
					<div class="news col-md-8">
						<div class="container">
							<h1>Last News</h1>
							<div class="row">
								<?php 

								$loop1cats = get_theme_mod( 'set_loop1_categories' );
								$args1 = array(


									
											// Category Parameter

									'category__not_in' => array( 6 ),
									'category__in' => array( 7, 8 ),
									
											// Type & Status Parameters
									'post_type'   => 'post',
									
									
											// Pagination Parameters
									'posts_per_page' => 1,
									
									
									
									
									
								);




								$featured = new WP_Query( 'post_type=post&posts_per_page=1&cat=' . $loop1cats  );


								if ($featured->have_posts()) {
									while ($featured->have_posts()) {

										$featured->the_post(); ?>

										<div class="col-12">
											<?php get_template_part( 'template-parts/content', 'featured' ); ?>
										</div>

										<?php 


									}
									wp_reset_postdata();
										# code...
								}

								$per_page = get_theme_mod( 'set_loop2_posts_per_page' );
						// Colaboração do aluno Deividi de Azevedo
						$loop2_cat_exclude = explode( ',', get_theme_mod( 'set_loop2_categories_to_exclude' ));
						$loop2_cat_include = explode( ',', get_theme_mod( 'set_loop2_categories_to_include' ));



									//Segundo loop

								$args = array(
									'post_type' => 'post',
									'post_per_page' => $per_page,
									'category__not_in' => $loop2_cat_exclude,
									'category__in' => $loop2_cat_include,
									'offset' => 1




								);

								$secondery = new WP_Query( $args );

								if ($secondery->have_posts()) {
									while ($secondery->have_posts()) {

										$secondery->the_post(); ?>

										<div class="col-sm-6">
											<?php get_template_part( 'template-parts/content', 'secondary' ); ?>
										</div>

										<?php 


									}
									wp_reset_postdata();
										# code...
								}


								?>
							</div>
						</div>

					</div>						
				</div>
			</div>				
		</section>
		<section class="map">

			<?php 
			$key = get_theme_mod('set_map_apikey');
			$address = urlencode(get_theme_mod('set_map_address'));
			?>
			<iframe
			width="100%"
			height="350"
			style="border:0"
			loading="lazy"
			allowfullscreen
			src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key ?>
			&q=<?php echo $address ?>&zoom=15">
		</iframe>			
	</section>
</main>
</div>
<?php get_footer(); ?>