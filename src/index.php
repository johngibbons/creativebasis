<?php get_header(); ?>

	<main role="main">
		<div class="container">

			<section class="page-title">
				<h1><?php _e( 'Blog', 'html5blank' ); ?></h1>
				<h2 class="page-subtitle"><?php _e( 'Helpful Tips and Tricks', 'html5blank' ); ?></h2>
			</section>
			<!-- section -->
		</div>
		<section id="blog-index">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
			<!-- /section -->
	</main>

<?php get_footer(); ?>
