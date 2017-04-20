<!-- <?php get_header(); ?>

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
      <?php if ( have_posts() ) :
        // Change Query to post_type of tickets rather than post (default)
        $args = array(
          'post_type'=> 'ticket', 
          'meta_key' => 'start_date',
          'orderby' => 'meta_value',
          'order' => 'ASC',
        );
        query_posts($args);
        // Start the loop.
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
          <?php echo get_field('start_date');
          if ( !empty(get_field('end_date')) ){
            echo " &ndash; ".get_field('end_date');
          } ?>
          </small>  
          <a href="#"><h3 class="passOption__title">
          <?php the_title(); ?> &mdash; <?php echo '$'.get_field('price')?>
          
          <?php if ( !empty(get_the_content()) ):?>
            <span class="passOption__note"><?php the_content() ?></span>
          <?php endif ?>
             
          </h3></a>
        </li>

        <?php
        endwhile;
      endif;
      wp_reset_postdata(); 
      ?>
    </ul>
  </div>

  <div class="clearFloat">
  </div>
</div>

<div class="starDivider l-starDivider"></div>

<div class="outerContainer">
  <div class="centerText l-centerText">
    <h3 class="centerText__title">Advance Single-Day Passes</h3>
    <p class="centerText__subtitle">All Venues</p>
    <p class="centerText__body">Will go live later in the summer, coinciding with the day-schedule announcement.</p>
  </div>
</div>

<div class="starDivider l-starDivider"></div>

<div class="outerContainer">
  <div class="centerText l-centerText">
    <h3 class="centerText__title">Specialty Passes</h3>
    <p class="centerText__subtitle">3 day pass &mdash; All Venues</p>
    <p class="centerText__body">Featuring perks designed to enhance your Lincoln Calling experience, these will go live on May 4, coinciding with first-round lineup announcement.</p>
  </div>

  <a href="#" class="buyNowButton l-fullWidth l-buyNow">
    <div class="condensed">Buy Now</div>
  </a>

<?php get_footer(); ?> -->