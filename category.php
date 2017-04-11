<!-- Go through the posts of the current category -->
<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

		<!-- Each post will be one artist for example -->
		<?php the_title(); ?>

	<?php endwhile;
endif;
?>
