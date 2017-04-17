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
							class="article__image mobile-hide"
							src="<?php echo $image['url']; ?>" 
							alt="<?php $image['alt']; ?>"
						/>
				</div>
			</div>
		</div>

		<img 
			class="article__image desktop-hide"
			src="<?php echo $image['url']; ?>" 
			alt="<?php $image['alt']; ?>"
		/>

		<div class="outerContainer">
			<div class="templateBody">
				<div class="article">
					<?php endif ?>
					<!-- Get the post title -->
					<h3 class='templateTitle article__title l-article__title'>
						<?php the_title(); ?>
					</h3>
					<!-- Get the author and date -->
					<p class="article__meta l-article__meta">
						<?php echo "by "; the_author(); echo " | "; the_date(); ?>
					</p>
					<!-- Get the post body -->
				    <p class='pageBody'>
					    <?php echo get_field('article_body'); ?>	
				    </p>
			    </div>

			    <!-- Get the author info -->
			    <div class="author l-author">
					<div class="l-avatarWrapper">
				    	<img 
					    	class="author__avatar l-author__avatar" 
							src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>" 
						/>
					</div>
			    	<p class="author__blurb l-author__blurb">
				    	<?php the_author(); ?> is
				    	
				    	<?php $authorId = get_the_author_meta('id');
				    	echo the_field( 'workplace', "user_".strval($authorId) )."'s ";
				    	echo the_field( 'position', "user_".strval($authorId) ).".";
				    	?>

				  		Reach them with news tips and story ideas at 

				  		<?php echo get_the_author_meta('user_email'); ?>.	
			    	</p>
			    </div>


		    <?php endwhile;
		    the_posts_pagination();
		endif;
		?>
	</div>

	<div class="hr mobile-hide">
		<i class="fa fa-circle" aria-hidden="true"></i>
		<i class="fa fa-circle" aria-hidden="true"></i>
		<i class="fa fa-circle" aria-hidden="true"></i>
	</div>
</div>

<div class="starDivider l-starDivider"></div>

<div class="outerContainer">

<?php get_footer(); ?>