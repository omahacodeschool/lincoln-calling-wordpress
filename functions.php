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
        'prepend' => '',
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

?>
