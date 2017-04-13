<?php get_header( 'modal' ); ?>

<h1 class="templateTitle l-templateTitle"><?php single_cat_title("Info - "); ?></h1>

<p class="pageDescription"><?php echo strip_tags( category_description( $category_id ) ); ?></p>

<div class="allArtistCards l-allArtistCards">

	<?php 
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>


	<div class="artistCardContainer l-artistCardContainer">

		<a href="#" class="artistThumbnail">
			<div class="imageContainer" style="background-image: url( <?php echo get_field('artist_card_image'); ?>)">
			</div>
		</a>

		<div class="artistFullImage" style="display: none;">
			<?php echo get_field('artist_full_image'); ?>
		</div>

		<a href="#" class="artist__name">
			<?php echo strip_tags( the_title() ); ?>
		</a>

		<div class="artistSiteLink" style="display: none;">
			<a href="<?php echo get_field('artist_website_url'); ?>"><?php echo get_field('artist_website_name'); ?></a>
		</div>

		<div class="artistDescription" style="display: none;">
			<?php echo get_field( 'artist_summary' ); ?>
		</div>

		<div class="artist__city">
			<?php echo strip_tags( get_field( 'artist_subtitle' ) ); ?>
		</div>

		<div class="socials" style="display: none;">
			<div class="instagram"><?php echo get_field( 'artist_instagram' ); ?></div>
			<div class="snapchat"><?php echo get_field( 'artist_snapchat' ); ?></div>
			<div class="facebook"><?php echo get_field( 'artist_facebook' ); ?></div>
			<div class="twitter"><?php echo get_field( 'artist_twitter' ); ?></div>
			<div class="soundcloud"><?php echo get_field( 'artist_soundcloud' ); ?></div>
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
				
					<div class="artistModalImage"></div>

					<div class="artistInfo l-posRelative">

						<div class="artistName l-artistName condensed l-moveUp l-posRelative">
							
						</div>

						<div class="closeModal l-closeX">x</div>

						<div class="artistSummary l-artistSummary">
							<a href=""></a>
						</div>

						<div class="modalSocialIcons l-modalSocialIcons l-posRelative">

							<a class="instagramLink" href=""><i class="fa fa-instagram modalIcon" aria-hidden="true"></i></a>

							<a class="snapchatLink" href=""><i class="fa fa-snapchat-ghost modalIcon" aria-hidden="true"></i></a>

							<a class="facebookLink" href=""><i class="fa fa-facebook-square modalIcon" aria-hidden="true"></i></a>

							<a class="twitterLink" href=""><i class="fa fa-twitter modalIcon" aria-hidden="true"></i></a>

							<a class="soundcloudLink" href=""><i class="fa fa-soundcloud modalIcon iconOblong" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>

				<div class="nextPrevButtons l-posAbsolute l-vertCenter">
					<i class="fa fa-caret-left prevButton" aria-hidden="true"></i>
					<span>Next/Previous</span>
					<i class="fa fa-caret-right nextButton" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
</div>
