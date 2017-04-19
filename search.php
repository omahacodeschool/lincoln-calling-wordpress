<?php get_header();

if ( have_posts() ):
	while ( have_posts() ) : the_post(); ?>


		<li>
		
		<?php if ( strpos( get_the_category_list(), "Lineup" )) {
			$slug = get_the_category()[1]->slug; ?>
			<a class="footerLinks__title hr l-block" href="<?php echo $slug ?>"><?php the_title(); ?></a>
		<?php }
		else{ ?>
			<a class="footerLinks__title hr l-block" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php } ?>

		</li>


		<?php endwhile;
	the_posts_pagination();
endif;

get_footer(); ?>