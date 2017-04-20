<?php get_header(); ?>
<h1 class="templateTitle l-templateTitle l-artistModalImage">Search results</h1>
<ul class="searchUL">

<?php if ( have_posts() ):
	while ( have_posts() ) : the_post(); ?>

		<li>		
		<?php if ( strpos( get_the_category_list(), "Lineup" )) {
			$slug = get_the_category()[1]->slug; ?>
			<a class="footerLinks__title hr l-block underlined" href="<?php echo $slug ?>"><?php the_title(); ?></a>
		<?php }
		else{ ?>
			<a class="footerLinks__title hr l-block underlined" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php } ?>
		</li>

	<?php endwhile;
endif; ?>

</ul>
<?php get_footer(); ?>