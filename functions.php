<?php

add_action( 'init', 'create_ticket_type' );

function create_ticket_type() {
  register_post_type( 'ticket',
    array(
      'labels' => array(
        'name' => __( 'Tickets' ),
        'singular_name' => __( 'Ticket' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

add_action( 'init', 'create_artist_type' );

function create_artist_type() {
  register_post_type( 'artist',
    array(
      'labels' => array(
        'name' => __( 'Artists' ),
        'singular_name' => __( 'Artist' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

add_action( 'init', 'create_pagetemplate_type' );

function create_pagetemplate_type() {
  register_post_type( 'template',
    array(
      'labels' => array(
        'name' => __( 'Template Page' ),
        'singular_name' => __( 'Template' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_artists',
		'title' => 'Artists',
		'fields' => array (
			array (
				'key' => 'field_58ee5c07138e5',
				'label' => 'Artist Subtitle',
				'name' => 'artist_subtitle',
				'type' => 'text',
				'instructions' => 'Artist City or subtitle goes here.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Artist city or subtitle...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58ee5c45138e6',
				'label' => 'Artist Card Image',
				'name' => 'artist_card_image',
				'type' => 'image',
				'instructions' => 'This image will be the artist thumbnail image. Resolution needs to be 310px X 222px.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58ee5ca3138e7',
				'label' => 'Artist Full Image',
				'name' => 'artist_full_image',
				'type' => 'image',
				'instructions' => 'Full image for the pop-up modal. Resolution should be 783px X 505px.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58ee5cc9138e8',
				'label' => 'Artist Twitter',
				'name' => 'artist_twitter',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s twitter link here.',
				'default_value' => '',
				'placeholder' => 'Twitter...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58ee5cf0138e9',
				'label' => 'Artist Instagram',
				'name' => 'artist_instagram',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s instagram link here.',
				'default_value' => '',
				'placeholder' => 'Instagram...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58ee5d0b138ea',
				'label' => 'Artist Facebook',
				'name' => 'artist_facebook',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s facebook link here.',
				'default_value' => '',
				'placeholder' => 'Facebook...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58ee5d1c138eb',
				'label' => 'Artist Snapchat',
				'name' => 'artist_snapchat',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s snapchat link here.',
				'default_value' => '',
				'placeholder' => 'Snapchat...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58ee5d2b138ec',
				'label' => 'Artist Soundcloud',
				'name' => 'artist_soundcloud',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s soundcloud link here.',
				'default_value' => '',
				'placeholder' => 'Soundcloud...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eea0fa9f7b5',
				'label' => 'Artist Summary',
				'name' => 'artist_summary',
				'type' => 'textarea',
				'instructions' => 'Artist\'s website, city, day/time of performance, venue, summary',
				'required' => 1,
				'default_value' => 'The artist\'s website link will be added here if it was provided.
	Artist City (optional)
	
	Day/Time (optional)
	Venue (optional)
	
	Summary (required)',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58eeb42c46594',
				'label' => 'Artist Website URL',
				'name' => 'artist_website_url',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s website URL here.',
				'default_value' => '',
				'placeholder' => 'www.realestateband.com...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eeb70b46595',
				'label' => 'Artist Website Name',
				'name' => 'artist_website_name',
				'type' => 'text',
				'instructions' => 'This text will be displayed instead of the URL.',
				'default_value' => '',
				'placeholder' => 'realestateband.com...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => '24',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_ticket-fields',
    'title' => 'Ticket Fields',
    'fields' => array (
      array (
        'key' => 'field_58e7ead013a51',
        'label' => 'Price',
        'name' => 'price',
        'type' => 'number',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '$',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_58e7eaf313a52',
        'label' => 'Status',
        'name' => 'status',
        'type' => 'radio',
        'required' => 1,
        'choices' => array (
          'Regular' => 'Regular',
          'Discounted' => 'Discounted',
          'Sold Out' => 'Sold Out',
        ),
        'other_choice' => 0,
        'save_other_choice' => 0,
        'default_value' => 'Regular',
        'layout' => 'vertical',
      ),
      array (
	'key' => 'field_58e9b4f05a71f',
	'label' => 'Start Date',
	'name' => 'start_date',
	'type' => 'date_picker',
	'required' => 1,
	'date_format' => 'MM dd',
	'display_format' => 'MM dd',
	'first_day' => 1,
      ),
      array (
	'key' => 'field_58e9b5605a720',
	'label' => 'End Date',
	'name' => 'end_date',
	'type' => 'date_picker',
	'date_format' => 'MM dd',
	'display_format' => 'MM dd',
	'first_day' => 1,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'ticket',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_artists-fields',
		'title' => 'Artists Fields',
		'fields' => array (
			array (
				'key' => 'field_58eba0a578546',
				'label' => 'Artist City',
				'name' => 'artist_city',
				'type' => 'text',
				'required' => 1,
				'instructions' => 'Artist city of origin.',
				'default_value' => '',
				'placeholder' => 'Artist City...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eba19f78547',
				'label' => 'Artist Website',
				'name' => 'artist_website',
				'type' => 'text',
				'instructions' => 'Enter the artist\'s website here.',
				'default_value' => '',
				'placeholder' => 'Artist Website...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eba1ef78548',
				'label' => 'Artist Card Thumbnail Image',
				'name' => 'artist_card_thumbnail_image',
				'type' => 'image',
				'instructions' => 'This image will be used on the artist card. Resolution must be 310 px X 222 px.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58eba2b378549',
				'label' => 'Artist Full Size Image',
				'name' => 'artist_full_size_image',
				'type' => 'image',
				'instructions' => 'Artist\'s full size image for the pop-up modal. This image must be 783 px X 505 px.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58eba3927854a',
				'label' => 'Artist Twitter',
				'name' => 'artist_twitter',
				'type' => 'text',
				'instructions' => 'Link to artist\'s twitter page.',
				'default_value' => '',
				'placeholder' => 'Twitter...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eba3ca7854b',
				'label' => 'Artist\'s Snapchat',
				'name' => 'artists_snapchat',
				'type' => 'text',
				'instructions' => 'Link to artist\'s snapchat.',
				'default_value' => '',
				'placeholder' => 'Snapchat...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eba3e27854c',
				'label' => 'Artist\'s Soundcloud',
				'name' => 'artists_soundcloud',
				'type' => 'text',
				'instructions' => 'Link to artist\'s soundcloud page.',
				'default_value' => '',
				'placeholder' => 'Soundcloud...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eba3f77854d',
				'label' => 'Artist\'s Facebook',
				'name' => 'artists_facebook',
				'type' => 'text',
				'instructions' => 'Link to artist\'s facebook page.',
				'default_value' => '',
				'placeholder' => 'Facebook...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58eba40c7854e',
				'label' => 'Artist\'s Instagram',
				'name' => 'artists_instagram',
				'type' => 'text',
				'instructions' => 'Link to artist\'s instagram page.',
				'default_value' => '',
				'placeholder' => 'Instagram...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'artist',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_get-involved-posts',
		'title' => 'Get Involved posts',
		'fields' => array (
			array (
				'key' => 'field_58f61b7b6d428',
				'label' => 'Nav Title',
				'name' => 'nav_title',
				'type' => 'text',
				'instructions' => 'Enter in a title for the nav-bar display. If left empty will use post title instead.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58f61ba46d429',
				'label' => 'Page Description',
				'name' => 'page_description',
				'type' => 'textarea',
				'instructions' => 'Enter a short description for the page.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58ed4933ceb7d',
				'label' => 'Article Body',
				'name' => 'article_body',
				'type' => 'textarea',
				'instructions' => 'Write the meat of your post in here.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => 'Body...',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58ee367170da6',
				'label' => 'Article Image',
				'name' => 'article_image',
				'type' => 'image',
				'instructions' => 'Add an Optional Image to this post. (Will be displayed above the Article Title)',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'null',
							'operator' => '==',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_category',
					'operator' => '==',
					'value' => get_cat_ID( 'Get Involved' ),
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_author-fields',
		'title' => 'Author Fields',
		'fields' => array (
			array (
				'key' => 'field_58f4ea4d93c52',
				'label' => 'Workplace',
				'name' => 'workplace',
				'type' => 'text',
				'instructions' => 'Enter the name of where you work.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58f4eb354ed49',
				'label' => 'Position',
				'name' => 'position',
				'type' => 'text',
				'instructions' => 'Enter your job title here.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_user',
					'operator' => '==',
					'value' => 'all',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


// Makes children categories use parents template
function new_subcategory_hierarchy() { 
    $category = get_queried_object();
    $parent_id = $category->category_parent;
    $templates = array();
    if ( $parent_id == 0 ) {
        // Use default values from get_category_template()
        $templates[] = "category-{$category->slug}.php";
        $templates[] = 'category.php';     
    } else {
        // Create replacement $templates array
        $parent = get_category( $parent_id );
        // Current first
        $templates[] = "category-{$category->slug}.php";
        // Parent second
        $templates[] = "category-{$parent->slug}.php";
        $templates[] = 'category.php'; 
    }
    return locate_template( $templates );
}

add_filter( 'category_template', 'new_subcategory_hierarchy' );

add_action( 'init', 'my_remove_post_type_support', 999 );
function my_remove_post_type_support() {
    remove_post_type_support( 'post', 'editor' );
}

remove_filter('the_content', 'wpautop');
?>

