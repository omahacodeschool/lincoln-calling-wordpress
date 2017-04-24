<?php get_header(); ?>

	<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/scripts/slideshow.js"></script>
	<div class="featured l-featured">

		<div class="l-cornerImages">
			<img class="corner-top-left mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
			<img class="corner-top-right mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
		</div>

		<ul class="featuredArtists">
			<li class="featuredItem l-featuredItem">
				<p class="featured__artist l-inline-block">Real estate</p>
				<i class="fa fa-circle"></i>
				<p class="featured__artist l-inline-block">cloud nothings</p>
			</li>
			<li class="featuredItem l-featuredItem">
				<p class="featured__artist l-inline-block">Domo genesis</p>
				<i class="fa fa-circle"></i>
				<p class="featured__artist l-inline-block">The mynabirds</p>
			</li>
			<li class="featuredItem l-featuredItem">
				<p class="featured__artist l-inline-block">David bowie</p>
				<i class="fa fa-circle"></i>
				<p class="featured__artist l-inline-block">frank ocean</p>
			</li>
		</ul>
		<hr class="featuredDivider">
		<ul class="featuredArticles">
			<li class="featuredItem l-featuredItem">
				<p class="featured__article l-inline-block">Innovation</p>
				<i class="fa fa-circle"></i>
				<p class="featured__article l-inline-block">Night Market</p>
			</li>
			<li class="featuredItem l-featuredItem">
				<p class="featured__article l-inline-block">Workshops</p>
				<i class="fa fa-circle"></i>
				<p class="featured__article l-inline-block">Yp week</p>
			</li>
		</ul>
		<a class="featuredFullLink l-block" href="#">SEE FUll lineup</a>

		<div class="l-cornerImages">
			<img class="corner-bottom-left mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
			<img class="corner-bottom-right mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
		</div>

	</div>
</div>

<div class="starDivider l-starDivider"></div>

<div class="outerContainer">
	<div class="buyTicketsDecor">
		<div class="buyTicketsButton">
			<a href="http://bit.ly/LC201701">BUY TICKETS</a>
		</div>
	</div>
</div>

<div class="starDivider l-starDivider"></div>

<div class="outerContainer">
	<div class="widgets l-widgets">
		<div class="widgets__youtube l-widgets__youtube"></div>
		<div class="widgets__slideshow l-widgets__slideshow">
			<div class="slideShow js-slideShow">
				<?php // Set wp_query to ask for updates posts 
				$args = array(
					'posts_per_page'   => 5,
					'category_name'    => 'updates',
					'orderby'          => 'date',
				);
				query_posts( $args ); ?>
				<div class="slideShowImages">
					<div class="imageStrip js-imageStrip">
						<?php if ( have_posts() ) :
					        while ( have_posts() ) : the_post(); ?>
<!-- 
					        	<div class="img" style="background-image:url('<?php echo get_field('article_image')['url']; ?>');"></div>
					        	 -->
						    	<img src="<?php echo get_field('article_image')['url']; ?>"></img>

				    		<?php endwhile;
			    		endif;
						?>
					</div>
				</div>
				<div class="slideShowControls">
					<?php if ( have_posts() ) :
				       while ( have_posts() ) : the_post(); ?> 
					    <i class="slideShow__control fa fa-circle"></i>	
			    		<?php endwhile;
		    		endif;
					?>
				</div>
				<div class="slideShowArticles">
				<?php if ( have_posts() ) :
			        while ( have_posts() ) : the_post(); ?>
			    	<a class="slideShow__article" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		    		<?php endwhile;
	    		endif;
	    		wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
		<div class="widgets__spotify l-widgets__spotify"></div>
	</div>

</div>

<div class="instagramWidget l-instagramWidget">
	<div class="instagramText l-instagramText">
		<span><i class="fa fa-instagram instagramWidgetIcon l-instagramWidgetIcon" aria-hidden="true"></i>@LincolnCalling</span>
	</div>

	<div class="instagramPlaceholder l-instagramPlaceholder">
	</div>
</div>

<div class="outerContainer">

<?php get_footer(); ?>