<?php 
/*
Template Name: Section One
*/
?>
<?php get_header(); ?>
		<!-- Intro Wrapper -->
			<div id="intro-wrapper" class="wrapper wrapper-style1">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


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
				
			<?php 
				endwhile;
				endif; // END OF LOOP. 
			?>
			</div>
		<!-- /Intro Wrapper -->
<?php get_footer(); ?>