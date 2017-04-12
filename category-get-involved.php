<?php get_header(); ?>

<div class="categoryInfo">
	<h1 class="categoryInfo__title"><?php single_cat_title('Info - '); ?></h1>
	<p class="categoryInfo__description">
		<?php echo category_description( $wp_query->get_queried_object_id() ); ?>
	</p>
</div>


<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>

		<div class="article">
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
			<h3 class='article__title'>
				<?php the_title(); ?>
			</h3>
		    <p class='article__body'>
			    <?php echo get_field('article_body'); ?>	
		    </p>
	    </div>

    <?php endwhile;
    the_posts_pagination();
endif;
?>

<?php get_footer(); ?>