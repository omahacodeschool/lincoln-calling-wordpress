<?php get_header(); ?>

	<?php if ( have_posts() ) :
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

			<div class="artistCardContainer">
				<div class="imageContainer" style="background-image: url('../assets/images/ArtistCard.png');">
				</div>

				<div class="artist__name"><?php the_title(); ?></div>
				<div class="artist__city"><?php echo get_field('artist_city'); ?></div>
			</div>

		<?php
		// End the loop.
		endwhile;

		// Previous/next page navigation.
		the_posts_pagination();

	endif;
	?>

<?php get_footer(); ?>