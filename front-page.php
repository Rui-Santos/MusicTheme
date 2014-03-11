<?php get_header(); ?>

<!-- Intro Wrapper -->
<div id="intro-wrapper" class="wrapper wrapper-style1">	
		
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php
	// TODO: Turn all these sections into theme options to be displayed depending on what pages are selected to display
	// This will make the pagename=( dynamic slug ) to be called out
		$music_query = new WP_Query( 'pagename=music' );
		if ( $music_query->have_posts() ): while ( $music_query->have_posts() ) : 
			$music_query->the_post(); 
	?>

		<div class="title"><?php the_title(); ?></div>
		<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Intro -->
								<section id="intro">
									
									<p class="style2">	<?php the_content(); ?> </p>
									
								</section>
							<!-- /Intro -->
							
						</div>
					</div>
				</div>

	<?php endwhile; ?>
	<?php 
		endif;
		wp_reset_postdata();
	?>
</div>
<!-- /Intro Wrapper -->
<!-- Main Wrapper -->
			<div class="wrapper wrapper-style2">
	<?php 
		$events_query = new WP_Query( 'pagename=updates' );
		if ( $events_query->have_posts() ): while ( $events_query->have_posts() ) : 
			$events_query->the_post(); 
	?>

		<div class="title"><?php the_title(); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									
									
									<!-- Features -->
										<section id="features">
											
											<div class="feature-list">
												<div>
													<div class="row">
														<div class="6u">
															<section>
																<?php the_content(); ?>
															</section>
														</div>
														
													</div>
												</div>
											</div>
											
										</section>
									<!-- /Features -->
									
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>

	<?php endwhile; ?>
	<?php 
		endif;
		wp_reset_postdata();
	?>
</div>
<!-- /Main Wrapper -->

<!-- Highlights Wrapper 
<div class="wrapper wrapper-style3">
	<?php
	// TODO: turn this into a custom post type
		$mixtapes_query = new WP_Query( 'pagename=mixtapes' );
		if ( $mixtapes_query->have_posts() ): while ( $mixtapes_query->have_posts() ) : 
			$mixtapes_query->the_post(); 
	?>

				<div class="title"><?php the_title(); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							 
								<div id="highlights">
									<div>
										<div class="row">
											<div class="4u">
												<section class="highlight highlight-one">
													<a href="http://fav.me/d59i3b3" class="image image-full"><img src="images/pic02.jpg" alt="" /></a>
													<h3><a href="#">Aliquam diam consequat</a></h3>
													<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
													<ul class="actions">
														<li><a href="#" class="button button-style1">Learn More</a></li>
													</ul>
												</section>
											</div>
											<div class="4u">
												<section class="highlight highlight-two">
													<a href="http://fav.me/d4tqyby" class="image image-full"><img src="images/pic03.jpg" alt="" /></a>
													<h3><a href="#">Nisl adipiscing sed lorem</a></h3>
													<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
													<ul class="actions">
														<li><a href="#" class="button button-style1">Learn More</a></li>
													</ul>
												</section>
											</div>
											<div class="4u">
												<section class="highlight highlight-three">
													<a href="http://fav.me/d5w2dot" class="image image-full"><img src="images/pic04.jpg" alt="" /></a>
													<h3><a href="#">Mattis tempus lorem</a></h3>
													<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
													<ul class="actions">
														<li><a href="#" class="button button-style1">Learn More</a></li>
													</ul>
												</section>
											</div>
										</div>
									</div>
								</div>
							--><!-- /Highlights 
							
						</div>
					</div>
				</div>

	<?php endwhile; ?>
	<?php 
		endif;
		wp_reset_postdata();
	?>
</div>-->
<!-- /Highlights Wrapper -->

<?php 
	endwhile;
	endif; // END OF LOOP
?>


<?php get_footer(); ?>