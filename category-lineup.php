<?php get_header(); ?>

<h1 class="templateTitle l-templateTitle"><?php single_cat_title("Info - "); ?></h1>

<p class="pageDescription"><?php echo strip_tags( category_description( $category_id ) ); ?></p>

<div class="allArtistCards l-allArtistCards">

	<?php 
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>


	<div class="artistCardContainer l-artistCardContainer">

		<a href="#">
			<div class="imageContainer" style="background-image: url( <?php echo get_field('artist_card_image') ?>)">
			</div>
		</a>

		<a href="#" class="artist__name">
			<?php echo strip_tags( the_title() ); ?>
		</a>

		<div class="artist__city">
			<?php echo strip_tags( get_field( 'artist_subtitle' ) ); ?>
		</div>
	</div>

	<?php
	// End the loop.
	endwhile; ?>

</div>

<div class="l-clearFloat"></div>

<?php get_footer(); ?>