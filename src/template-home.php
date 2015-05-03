<?php /* Template Name: Home */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="home-landing" class="hero">
			<div id="video-overlay"></div>
			<div class="container">
				<h1>
					<span class="design-emphasis">|</span><span class="design animated fadeInRight">Design. </span>
					<span class="build-emphasis">|</span><span class="build animated fadeInRight">Build. </span>
					<span class="grow-emphasis">|</span><span class="grow animated fadeInRight">Grow. </span>
				</h1>
				<p class="subhead">We bring ideas to life online.  Have a project you need help with?</p>
				<video id="home-video" class="full-video parallax fullscreen-bg" src="<?php echo get_template_directory_uri(); ?>/img/process.mp4" autoplay mute loop></video>
				<a href= "<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
					<button>Get a free quote</button>
				</a>
			</div>
			<div id="sticky-nav">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></img>
			</div>
		</section>

		<section class="animate fullwidth">
			<div class="container">
				<h1 class="design"><span class="design-emphasis">|</span>Design</h1>
				<div class="section-description">
					<p>
						We believe that design comes first.  We understand that we are designing for users, not ourselves, or even
						our clients.
					</p>
					<p>	
						We love Ruby on Rails for larger, more complex projects and Wordpress for content-based and smaller projects.
						Let us tell you which one might be right for your next big idea.
					</p>
				</div>
				<div class="section-bullets">
					<ul class="design-emphasis">
						<li>User Experience</li>
						<li>Responsive</li>
						<li>Native Application</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="animate images">
			<div class="large">
				<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/home-build.jpg"></img>
			</div>
			<div class="small">
				<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/design.jpeg"></img>
			</div>
			<div class="small">
				<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/about-branding.jpg"></img>
			</div>
		</section>

		<section class="animate fullwidth">
			<div class="container">
				<h1 class="build"><span class="build-emphasis">|</span>Build</h1>
				<div class="section-description">
					<p>
						Quality code is worth its weight in gold (if code weighed a lot...you get what we mean).  A well thought
						out software architecture along with good, clean, modular code can save months of work and thousands of dollars.
					</p>
					<p>	
						We love Ruby on Rails for larger, more complex projects and Wordpress for content-based and smaller projects.
						Let us tell you which one might be right for your next big idea.
					</p>
					<a href= "<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
						<button class="build-btn">Get Started Today</button>
					</a>
				</div>
				<div class="section-bullets">
					<ul class="build-emphasis">
						<li>Ruby on Rails</li>
						<li>Wordpress</li>
						<li>eCommerce</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="animate images rtl">
			<div class="large">
				<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/home-build.jpg"></img>
			</div>
			<div class="small">
				<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/design.jpeg"></img>
			</div>
			<div class="small">
				<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/about-branding.jpg"></img>
			</div>
		</section>

			<section class="animate fullwidth">
				<div class="container">
					<h1 class="grow"><span class="grow-emphasis">|</span>Grow</h1>
					<div class="section-description">
						<p>
							Nunc lobortis ultrices justo. Sed feugiat semper lorem ac convallis. Nam ornare mollis mollis. 
							Quisque venenatis urna vitae pulvinar consectetur. Morbi in ligula at dolor sagittis euismod. 
							Duis imperdiet, nibh ac imperdiet fermentum, dolor libero efficitur orci, non ornare est velit at elit. 
							Phasellus sit amet pellentesque nunc, sed volutpat nulla. Fusce scelerisque vitae mi eu dictum. 
							Quisque vitae quam ultricies, faucibus metus sed, accumsan sapien. Nulla condimentum dolor est, quis posuere arcu accumsan et. 
							Proin pharetra pulvinar est eu pulvinar. Aenean quam ipsum, tempus ut est in, laoreet placerat mauris.
						</p>
						<a href= "<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
							<button class="grow-btn">Make More Money</button>
						</a>
					</div>
					<div class="section-bullets">
						<ul class="grow-emphasis">
							<li>Pay Per Click</li>
							<li>Display Ads</li>
							<li>Video Ads</li>
							<li>Social Media Advertising</li>
							<li>eCommerce</li>
							<li>Analytics</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="animate images">
				<div class="large">
					<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/home-build.jpg"></img>
				</div>
				<div class="small">
					<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/design.jpeg"></img>
				</div>
				<div class="small">
					<img class="fill" src="<?php echo get_template_directory_uri(); ?>/img/about-branding.jpg"></img>
				</div>
			</section>

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

		<!-- /section -->
	</main>

<?php get_footer(); ?>
