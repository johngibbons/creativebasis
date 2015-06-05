<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-title">
			<div class="container">
				<h1 class="minimal-text"><?php _e( 'Archives', 'html5blank' ); ?></h1>
			</div>
		</section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
