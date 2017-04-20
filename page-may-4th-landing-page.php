<?php get_header(); ?>

	<div class="featured l-featured">
		<ul class="featuredArtists">
			<li class="featuredItem">
				<p class="featured__artist l-inline-block">Real estate</p>
				<i class="fa fa-circle"></i>
				<p class="featured__artist l-inline-block">cloud nothings</p>
			</li>
			<li class="featuredItem">
				<p class="featured__artist l-inline-block">Domo genesis</p>
				<i class="fa fa-circle"></i>
				<p class="featured__artist l-inline-block">The mynabirds</p>
			</li>
			<li class="featuredItem">
				<p class="featured__artist l-inline-block">David bowie</p>
				<i class="fa fa-circle"></i>
				<p class="featured__artist l-inline-block">frank ocean</p>
			</li>
		</ul>
		<hr class="featuredDivider">
		<ul class="featuredArticles">
			<li class="featuredItem">
				<p class="featured__article l-inline-block">Innovation</p>
				<i class="fa fa-circle"></i>
				<p class="featured__article l-inline-block">Night Market</p>
			</li>
			<li class="featuredItem">
				<p class="featured__article l-inline-block">Workshops</p>
				<i class="fa fa-circle"></i>
				<p class="featured__article l-inline-block">Yp week</p>
			</li>
		</ul>
		<a class="featuredFullLink l-block" href="#">SEE FUll lineup</a>
		<img class="corner-top-left l-pos-top-left mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
		<img class="corner-top-right l-pos-top-right mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
		<img class="corner-bottom-left l-pos-bottom-left mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
		<img class="corner-bottom-right l-pos-bottom-right mobile-hide" src="<?php bloginfo('template_directory'); ?>/assets/images/corner.png">
	</div>
</div>

<div class="starDivider l-starDivider"></div>

<div class="outerContainer">
	<div class="buyTicketsDecor">
		<div class="buyTicketsButton">
			<a href="#">BUY TICKETS</a>
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

<?php get_footer(); ?>