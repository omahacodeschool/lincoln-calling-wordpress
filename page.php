<?php get_header(); ?>

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

<?php get_footer(); ?>