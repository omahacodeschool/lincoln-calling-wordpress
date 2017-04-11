<!-- Gets the title of the category and prepends a string  -->
<h1><?php single_cat_title('Info - '); ?></h1>
<!-- Gets the description of the category  -->
<?php echo category_description( $wp_query->get_queried_object_id() );

// The loop for each post in category
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>

    <!-- Do stuff here -->
    <p>Hi</p>

    <?php endwhile;
    the_posts_pagination();
endif;
?>