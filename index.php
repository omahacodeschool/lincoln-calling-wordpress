<?php get_header(); ?>

  <div class="announcement">
    <h2>A limited number of Early Bird tickets are available now! Get them while they last.</h2>
  </div>

  <a href="#" class="buyNowButton l-fullWidth l-buyNow">
    <div class="condensed">Buy Now</div>
  </a>

  <div class="centerText l-centerText">
    <h3 class="centerText__title">Festival Passes</h3>
    <p class="centerText__subtitle">3 Day Pass &mdash; All Venues.</p>
  </div>

  <div class="passOptions">
    <ul>
      <?php if ( have_posts() ) : ?>

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>

          <li class="passOption passOption--forSale">
            <small class="passOption__date">April 21</small>  
            <h3 class="passOption__title">
              Early Bird &mdash; $20 
              <span class="passOption__note">(Limited availability)</span>
            </h3>
          </li>

          <?php // the_title(); ?>
          <?php // the_content(); ?>

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
      <p class="centerText__subtitle">3 day pass &mdash; All Venues</p>
      <p class="centerText__body">Featuring perks designed to enhance your Lincoln Calling experience, these will go live on May 4, coinciding with first-round lineup announcement.</p>
    </div>
  </div>

  <a href="#" class="buyNowButton l-fullWidth l-buyNow">
    <div class="condensed">Buy Now</div>
  </a>

<?php get_footer(); ?>