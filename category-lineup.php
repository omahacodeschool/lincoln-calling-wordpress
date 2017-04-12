<?php get_header(); ?>

<h1 class="templateTitle l-templateTitle">Info - <?php the_title() ?></h1>

<p class="pageDescription"><?php echo strip_tags( category_description( $category_id ) ); ?></p>

<?php get_footer(); ?>