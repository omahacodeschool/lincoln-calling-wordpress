<?php get_header(); ?>

<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
?>

			<p class="passOption__date">hello</p>

<?php
        endwhile;
    endif; 
?>

<?php get_footer(); ?>