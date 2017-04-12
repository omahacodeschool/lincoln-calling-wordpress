<?php get_header(); ?>

<!-- Gets the title of the category and prepends a string  -->
<h1><?php single_cat_title('Info - '); ?></h1>
<!-- Gets the description of the category  -->
<?php echo category_description( $wp_query->get_queried_object_id() );

// The loop for each post in category
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>

	    <!-- Get Image -->
	    <?php $image = get_field('article_image');
	    if (!empty($image)):
	    ?>
			<img 
				class="article__image"
				src="<?php echo $image['url']; ?>" 
				alt="<?php $image['alt']; ?>"
			/>
		<?php endif ?>


		<!-- Get the actual post -->
		<h3 class='article__title'><?php the_title(); ?></h3>
	    <p class='article__body'><?php echo get_field('article_body'); ?></p>

    <?php endwhile;
    the_posts_pagination();
endif;
?>

<?php get_footer(); ?>