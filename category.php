<?php get_header(); ?>

<h1 class="templateTitle l-templateTitle l-artistModalImage"><?php single_cat_title(); ?></h1>

<ul>
<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

	<li>
		<a class="footerLinks__title l-block hr" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>

	<?php endwhile;
endif;
?>
</ul>



<?php get_footer(); ?>