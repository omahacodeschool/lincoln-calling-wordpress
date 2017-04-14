<?php get_header(); ?>

<div class="templateBody">
	<div class="categoryInfo">
		<h1 class="templateTitle l-templateTitle"><?php single_cat_title('Info - '); ?></h1>
		<p class="pageDescription">
			<?php echo strip_tags(category_description()); ?>
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
				<!-- Get the post title -->
				<h3 class='article__title'>
					<?php the_title(); ?>
				</h3>
				<!-- Get the author and date -->
				<p class="article__meta">
					<?php echo "by "; the_author(); echo " | "; the_date(); ?>
				</p>
				<!-- Get the post body -->
			    <p class='article__body'>
				    <?php echo get_field('article_body'); ?>	
			    </p>
		    </div>

		    <!-- Get the author info -->
		    <div class="author">
		    	<img 
			    	class="author__avatar" 
					src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>" 
				/>
		    	<p class="author__blurb">
			    	<?php the_author(); ?> is Hear Nebraska's managing editor. Reach him with news tips and story ideas at <?php echo get_the_author_meta('user_email'); ?>.	
		    	</p>
		    </div>


	    <?php endwhile;
	    the_posts_pagination();
	endif;
	?>
</div>

<?php get_footer(); ?>