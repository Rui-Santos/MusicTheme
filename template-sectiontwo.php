<?php 
/*
Template Name: Section Two
*/
?>
<?php get_header(); ?>
		<!-- Main Wrapper -->
			<div class="wrapper wrapper-style2">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


				<div class="title"><?php the_title(); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									
									<!-- Image
										<a href="http://fav.me/d5pjw3g" class="image image-featured">
											<img src="images/pic01.jpg" alt="" />
										</a> -->
									<!-- /Image -->
									
									<!-- Features -->
										<section id="features">
											<!--<header class="style1">
												<h2>Dolor consequat feugiat amet veroeros</h2>
												<p class="byline">Feugiat dolor nullam orci pretium phasellus justo</p>
											</header>-->
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
											<!--<ul class="actions actions-centered">
												<li><a href="#" class="button button-style1 button-big">Get Started</a></li>
												<li><a href="#" class="button button-style2 button-big">More Info</a></li>
											</ul>-->
										</section>
									<!-- /Features -->
									
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>
				
			<?php 
				endwhile;
				endif; // END OF LOOP. 
			?>
			</div>
		<!-- /Main Wrapper -->
<?php get_footer(); ?>