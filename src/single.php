<?php get_header(); ?>

	<main role="main">
	<!-- section -->
		<section class="conatiner">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<?php endif; ?>
				<div class="single-header">

					<div class="single-title">
						<!-- post title -->
						<h1 class="title-text"><?php the_title(); ?></h1>
						<!-- /post title -->
						<span class="date minimal-text">
							<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php the_date(); ?></time>
						</span>
					</div>

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<div class="single-featured-image parallax" style="background-image: url('<?php echo $url ?>')"></div>
					<?php endif; ?>
					<!-- /post thumbnail -->
				</div>

				<section class="single-content-section">
					<div class="container">
						<div class="single-details">
							<!-- post details -->
							<span class="author">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 128 ); ?>
								<span class="author-name minimal-text"><?php _e( 'Written by:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
							</span>
							<!-- /post details -->
						</div>

						<div class="single-content content-text">
							<?php the_content(); // Dynamic Content ?>
						</div>

						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

						<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

						<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

						<?php comments_template(); ?>
					</div>
				</section>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<div class="conatiner">
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</div>
			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
