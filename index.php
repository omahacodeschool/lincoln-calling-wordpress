<?php get_header(); ?>

  <div class="announcement">
    <h2>A limited number of Early Bird tickets are available now! Get them while they last.</h2>
  </div>

  <br>
  <a href="#" class="buyNowButton l-fullWidth l-buyNow">
    <div class="condensed">Buy Now</div>
  </a>

  <div class="centerText l-centerText">
    <h3 class="centerText__title">Festival Passes</h3>
    <p class="centerText__subtitle">3 Day Pass &mdash; All Venues.</p>
  </div>

  <div class="ticketsGraphic">
    <img src="../assets/images/ticketsPageGraphic.png">
  </div>

  <div class="passOptions">
    <ul>
      <?php if ( have_posts() ) : ?>

        <?php
        // Start the loop.
	$args = array('post_type'=>array('ticket'));
	query_posts($args);

        while ( have_posts() ) : the_post();
        ?>


	<?php if (get_field('status') == "Discounted"): ?>
		<li class="passOption passOption--forSale">
	<?php elseif (get_field('status') == "Sold Out"): ?> 
		<li class="passOption passOption--soldOut">
	<?php else: ?> 
		<li class="passOption">
	<?php endif ?>

            <small class="passOption__date">
		<?php echo get_field('start_date')." "; echo get_field('end_date')?>
	    </small>  
            <h3 class="passOption__title">
              <?php the_title(); ?> <i class="fa fa-minus"></i> $<?php echo get_field('price'); ?>
              <span class="passOption__note"> <?php the_content(); ?> </span>
            </h3>
          </li>

        <?php
        // End the loop.
        endwhile;

        // Previous/next page navigation.
        the_posts_pagination();

      endif;
      ?>
    </ul>
  </div>

  <div class="clearFloat">
  </div>

  <div class="l-centerAnnouncement">
    <div class="centerText l-centerText">
      <h3 class="centerText__title">Advance Single-Day Passes</h3>
      <p class="centerText__subtitle">All Venues</p>
      <p class="centerText__body">Will go live later in the summer, coinciding with the day-schedule announcement.</p>
    </div>

    <div class="centerText l-centerText">
      <h3 class="centerText__title">Specialty Passes</h3>
      <p class="centerText__subtitle">3 day pass <i class="fa fa-minus"></i> All Venues</p>
      <p class="centerText__body">Featuring perks designed to enhance your Lincoln Calling experience, these will go live on May 4, coinciding with first-round lineup announcement.</p>
    </div>
  </div>

  <a href="#" class="buyNowButton l-fullWidth l-buyNow">
    <div class="condensed">Buy Now</div>
  </a>

<?php get_footer(); ?>