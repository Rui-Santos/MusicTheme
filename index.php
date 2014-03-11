<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	

<?php 
	endwhile;
	endif; // END OF LOOP
?>

<?php get_footer(); ?>