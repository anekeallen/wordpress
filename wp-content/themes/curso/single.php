<?php get_header(); ?>
<div id="primary">
	<div id="main">
		<div class="container">
			<?php 
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content', 'single');

				?>

				<div class="row">
					<div class="pages text-left col-6">
						<?php next_post_link( $format = '« %link ', $link = '%title', $in_same_term = false, $excluded_terms = '', $taxonomy = 'category' )?>
					</div>
					<div class="pages text-right col-6">
						<?php previous_post_link('%link »') ?>
					</div>
				</div>
				<?php 
				if (comments_open() || get_comments_number()) {
					comments_template();
					# code...
				}

			}

			?>
		</div>
	</div>
</div>



<?php get_footer(); ?>