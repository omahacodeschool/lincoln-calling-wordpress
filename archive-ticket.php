<?php get_header(); ?>

<?php 
	if ( have_posts() ) : 
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
			<?php echo get_field('start_date'); echo get_field('end_date')?>
		</small>  
		<h3 class="passOption__title">
			<?php the_title(); ?><i class="fa fa-minus"></i>$<?php echo get_field('price'); ?>
			<span class="passOption__note"><?php the_content(); ?></span>
		</h3>
	</li>

<?php
    endwhile;
endif; 
?>

<?php get_footer(); ?>