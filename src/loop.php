<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumb">
				<?php the_post_thumbnail(array(600,600)); // Declare pixel size you need inside the array ?>
				<!-- post title -->
				<h2 class="post-title"><?php the_title(); ?></h2>
				<!-- /post title -->
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post details -->
		<p class="date subhead">
			<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
				<?php the_date(); ?>
			</time>
		</p>
		<p class="author subhead"><?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?> <?php the_author_posts_link(); ?></p>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

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
