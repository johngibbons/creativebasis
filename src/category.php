<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-title">
			<div class="container">
				<h1 class="minimal-text"><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>
			</div>
		</section>

		<section>
			<div class="container">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
