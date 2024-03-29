<?php 
/*
Template Name: Section Three
*/
?>
<?php get_header(); ?>
		<!-- Highlights Wrapper -->
			<div class="wrapper wrapper-style3">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


				<div class="title"><?php the_title(); ?></div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Highlights -->
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
							<!-- /Highlights -->
							
						</div>
					</div>
				</div>
				
			<?php 
				endwhile;
				endif; // END OF LOOP. 
			?>

</div>
		<!-- /Highlights Wrapper -->
<?php get_footer(); ?>