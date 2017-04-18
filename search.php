<?php get_header(); ?>
<?php 

// Searches by all post, post types.
//
// And posts belonging to a child-category of lineup should link to the that child-cat.
// Example:
//
// a link to Flight of the Conchords belongs to the category Music, and Lineup.
// The href will be to .../lineup/music/ aka the category archive page

// Create perfect links 
// --------------------
//
// if (posts categories include lineup){
//		change href to immediate cat
// }
// else{
//		use the_permalink();
// }


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
?>
<?php get_footer(); ?>