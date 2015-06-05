<?php /* Template Name: People */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="page-title">
			<div class="container">

				<h1 class="minimal-text"><?php the_title(); ?></h1>
				<h2 class="page-subtitle title-text"><?php _e( 'Who We Are', 'html5blank' ); ?></h2>
			</div>
		</section>

		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>