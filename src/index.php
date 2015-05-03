<?php get_header(); ?>

	<main role="main">
		<div class="container">

			<section class="page-title">
				<h1><?php _e( 'Blog', 'html5blank' ); ?></h1>
			</section>
			<!-- section -->
			<section id="blog-index">

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
			<!-- /section -->
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
