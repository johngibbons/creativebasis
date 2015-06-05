<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<?php endif; ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		</a>

		<div class="post-thumb-image" style="background-image: url('<?php echo $url ?>')"></div>

		<div class="post-thumb-details">
			<!-- post title -->
			<?php the_title("<h2 class='post-title'>", "</h2>"); ?>
			<!-- /post title -->
			<!-- post details -->
			<p class="date minimal-text">
				<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>"><?php echo get_the_date(); ?></time>
			</p>
			<!-- /post details -->
		</div>
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
