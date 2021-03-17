<?php get_header(); ?>
<div class="content-area">
	<main>
		<section class="slide">
			<div class="container">
				<div class="row">Slide</div>
			</div>
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


								$args1 = array(


									
											// Category Parameter

									'category__not_in' => array( 6 ),
									'category__in' => array( 7, 8 ),
									
											// Type & Status Parameters
									'post_type'   => 'post',
									
									
											// Pagination Parameters
									'posts_per_page'         => 1,
									
									
									
									
									
								);

								$featured = new WP_Query( $args1 );


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



									//Segundo loop

								$args = array(
									'post_type' => 'post',
									'post_per_page' => 2,
									'category__not_in' => array( 6 ),
									'category__in' => array( 7, 8 ),
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
			<div class="container">
				<div class="row">Mapa</div>
			</div>				
		</section>
	</main>
</div>
<?php get_footer(); ?>