<?php get_header( 'modal' ); ?>

<h1 class="templateTitle l-templateTitle"><?php single_cat_title(); ?></h1>

<p class="pageDescription"><?php echo strip_tags( category_description( $category_id ) ); ?></p>

<div class="allArtistCards l-allArtistCards">

	<?php 
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>


	<div class="artistCardContainer l-artistCardContainer"
	data-artist-name="<?php echo strip_tags( the_title() ); ?>"
	data-artist-full-image="<?php echo get_field('artist_full_image'); ?>"
	data-artist-site-link="<?php echo get_field('artist_website_url'); ?>"
	data-artist-website-name="<?php echo get_field('artist_website_name'); ?>"
	data-artist-description="<?php echo get_field( 'artist_summary' ); ?>"
	data-artist-instagram="<?php echo get_field( 'artist_instagram' ); ?>"
	data-artist-snapchat="<?php echo get_field( 'artist_snapchat' ); ?>"
	data-artist-facebook="<?php echo get_field( 'artist_facebook' ); ?>"
	data-artist-twitter="<?php echo get_field( 'artist_twitter' ); ?>"
	data-artist-soundcloud="<?php echo get_field( 'artist_soundcloud' ); ?>">

		<a href="#" class="artistThumbnail">
			<div class="imageContainer" style="background-image: url( <?php echo get_field('artist_card_image'); ?>)">
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

<!-- Modal -->
<div class="l-positionRel">
	<div class="modalOverlay l-modalOverlay" style="display: none;">

		<div class="modalWindow l-modalWindow">

			<div class="l-modalContentWrapper l-posRelative">

				<div class="l-modalContent">
				
					<div class="artistModalImage l-artistModalImage" ></div>

					<div class="artistInfo l-posRelative l-artistInfo">

						<div class="artistName l-artistName condensed l-moveUp l-posRelative">
							
						</div>

						<div class="closeModal l-closeX">x</div>

						<div class="artistSummary l-artistSummary">
						</div>

						<div class="modalSocialIcons l-modalSocialIcons l-posRelative">

							
							<a class="instagramLink" href=""><i class="fa fa-instagram modalIcon" aria-hidden="true"></i></a>

							<a class="snapchatLink" href=""><i class="fa fa-snapchat-ghost modalIcon" aria-hidden="true"></i></a>

							<a class="facebookLink" href=""><i class="fa fa-facebook-square modalIcon" aria-hidden="true"></i></a>

							<a class="twitterLink" href=""><i class="fa fa-twitter modalIcon" aria-hidden="true"></i></a>

							<a class="soundcloudLink" href=""><i class="fa fa-soundcloud modalIcon iconOblong" aria-hidden="true"></i></a>
						</div>

						<div class="nextPrevButtons l-nextPrevButtons">
							<i class="fa fa-caret-left prevButton" aria-hidden="true"></i>
							<span>Next/Previous</span>
							<i class="fa fa-caret-right nextButton" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
