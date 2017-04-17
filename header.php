<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css" />
	<?php wp_head(); ?>
</head>

<body>

<div class="outerContainer">
  <div class="header">
    <img src="<?php bloginfo("template_directory"); ?>/assets/images/header.png" alt="This is Lincoln Calling: music, art, innovation.">
  </div>

  <div class="nav">
    <ul class="navList l-navList">
      <li class="navList__item">
        <a class="navList__link" href="#">Buy Tickets</a>
      </li>
      <li class="navList__item">
        <a class="navList__link" href="#">Lineup</a>
        <ul class="navSubList l-navSubList">
          <?php wp_list_categories( array (
            'title_li' => '',
            'orderby' => 'id',
            'child_of' => get_cat_ID( 'lineup' ),
            'hide_empty' => 0
          ) ); ?>
        </ul>
      </li>
      <li class="navList__item">
        <a class="navList__link" href="#">Get Involved</a>
        <ul class="navSubList l-navSubList">
          <?php wp_list_categories( array (
            'title_li' => '',
            'orderby' => 'id',
            'child_of' => get_cat_ID( 'Get Involved' ),
            'hide_empty' => 0
          ) ); ?>
        </ul>
      </li>
      <li class="navList__item">
        <a class="navList__link" href="#">Updates</a>
      </li>
      <li class="navList__item">
        <a class="navList__link" href="#">Fest Info</a>
      </li>
      <li class="navList__item">
        <a class="navList__link" href="#"><i class="fa fa-envelope-o newsletterLink" aria-hidden="true"></i>Newsletter</a>
      </li>
    </ul>
  </div>
</div>

<img class="desktop-hide" src="<?php bloginfo("template_directory"); ?>/assets/images/mobileheader.png">
<div class="outerContainer">