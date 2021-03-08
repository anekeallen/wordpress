<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso WordPress</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons  col-6">Icones Sociais</div>
					<div class="search col-6  d-flex justify-content-end">Pesquisa</div>
				</div>
			</div>
			
		</section>
		<section class="menu-area">

			<div class="container">
				<div class="row">
					<section class="logo text-center col-6 ">Logo</section>
					
					<nav class="navbar navbar-expand-md navbar-light bg-info col-6" role="navigation">
						<div class="container">
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