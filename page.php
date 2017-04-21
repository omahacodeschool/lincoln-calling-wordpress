<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="templateBody">
		<div class="article">
			<h3 class='templateTitle article__title l-article__title'>
				<?php the_title(); ?>
			</h3>
		    <p class='pageBody'>
			    <?php the_content(); ?>	
		    </p>
	    </div>
	</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>