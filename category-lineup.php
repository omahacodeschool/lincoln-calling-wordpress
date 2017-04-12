<?php get_header( 'modal' ); ?>

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

		<div class="artistDescription" style="display: none;">
			<?php echo the_content(); ?>
		</div>

		<div class="artist__city">
			<?php echo strip_tags( get_field( 'artist_subtitle' ) ); ?>
		</div>
	</div>

	<?php
	// End the loop.
	endwhile; ?>

</div>

<div class="l-clearFloat"></div>

<!-- Modal -->
<div class="modalOverlay l-modalOverlay" style="display: none;">

	<div class="modalWindow l-modalWindow">

		<div class="l-modalContentWrapper l-posRelative">

			<div class="l-modalContent">
			
				<div class="artistModalImage"></div>

				<div class="artistInfo l-posRelative">

					<div class="artistName condensed l-moveUp l-posRelative">
						<h1></h1>
					</div>

					<div class="closeModal l-closeX">x</div>

					<div class="artistSummary">
						<a href=""></a>
					</div>

					<div class="modalSocialIcons l-posRelative">
						<i class="fa fa-instagram modalIcon" aria-hidden="true"></i>
						<i class="fa fa-snapchat-ghost modalIcon" aria-hidden="true"></i>
						<i class="fa fa-facebook-square modalIcon" aria-hidden="true"></i>
						<i class="fa fa-twitter modalIcon" aria-hidden="true"></i>
						<i class="fa fa-soundcloud modalIcon iconOblong" aria-hidden="true"></i>
					</div>
				</div>
			</div>

			<div class="nextPrevButtons l-posAbsolute l-vertCenter">
				<i class="fa fa-caret-left" aria-hidden="true"></i>
				<span>Next/Previous</span>
				<i class="fa fa-caret-right" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>