<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons  col-6">
						<?php if (is_active_sidebar('social-media')) {

							dynamic_sidebar('social-media');
							# code...
						} ?>
					 </div>
					<div class="search col-6  d-flex justify-content-end"><?php get_search_form() ?></div>
				</div>
			</div>
			
		</section>
		<section class="menu-area">

			<div class="container">
				<div class="row">
					<section class="logo text-center col-6 col-md-3 "><?php the_custom_logo(); ?></section>
					
					<nav class="navbar navbar-expand-md navbar-light col-md-9 col-6" role="navigation">
						<div class="container justify-content-end">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							
							<?php
							wp_nav_menu( array(
								'theme_location'    => 'my_main_menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav ml-auto',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
							?>
						</div>
					</nav>
				</div>
			</div>

		</section>
	</header>