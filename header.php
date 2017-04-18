<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css" />
	<?php wp_head(); ?>
  <script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/scripts/mobileNav.js"></script>
</head>

<body>

<div class="mobileHead l-mobileHead l-mobileOnly">
  <div class="mobileLeft l-mobileLeft">

    <div class="mobileLeftTop l-mobileLeftTop">

      <div class="burger l-burger">
        <img class="desktop-hide" src="<?php bloginfo("template_directory"); ?>/assets/images/burgerIcon.png">
      </div>

      <div class="mobileLogo l-mobileLogo">
        <a href="#">
          <img src="<?php bloginfo("template_directory"); ?>/assets/images/mobileLogo.png">
        </a>
      </div>
    </div>

    <div class="mobileNav l-mobileNav js-mobileNav">
      <ul class="mobileNavList l-mobileNavList">

        <li class="mobileNavList__item l-tinyOnly">
          <a class="mobileNavList__link" href="#">Buy Tickets</a>
        </li>
        
        <li class="mobileNavList__item l-mobileNavList__item">

          <a class="mobileNavList__link js-hasSubNav" href="#">Lineup</a>

          <ul class="mobileNavSubList l-mobileNavSubList js-mobileSubNav">
            <?php wp_list_categories( array (
              'title_li' => '',
              'orderby' => 'id',
              'child_of' => get_cat_ID( 'lineup' ),
              'hide_empty' => 0
            ) ); ?>
          </ul>
        </li>
        <li class="mobileNavList__item l-mobileNavList__item">
          <a class="mobileNavList__link js-hasSubNav" href="#">Get Involved</a>
          <ul class="mobileNavSubList l-mobileNavSubList js-mobileSubNav">
            <?php wp_list_categories( array (
              'title_li' => '',
              'orderby' => 'id',
              'child_of' => get_cat_ID( 'Get Involved' ),
              'hide_empty' => 0
            ) ); ?>
          </ul>
        </li>
        <li class="mobileNavList__item">
          <a class="mobileNavList__link" href="#">Updates</a>
        </li>
        <li class="mobileNavList__item">
          <a class="mobileNavList__link" href="#">Fest Info</a>
        </li>
        <li class="mobileNavList__item">
          <a class="mobileNavList__link" href="#">Newsletter <i class="fa fa-envelope-o newsletterMobileLink" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>

  </div>

  <div class="mobileRight l-mobileRight">
    <a href="#">Buy Tickets</a>
  </div>
</div>

<div class="outerContainer">
  <div class="header">
    <img src="<?php bloginfo("template_directory"); ?>/assets/images/header.png" alt="This is Lincoln Calling: music, art, innovation." class="l-desktopOnly">
  </div>

  <div class="nav l-desktopOnly">
    <ul class="navList l-navList">
      <li class="navList__item">
        <a class="navList__link" href="#">Buy Tickets</a>
      </li>
      <li class="navList__item">
        <a class="navList__link" href="#">Lineup <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i></a>
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
        <a class="navList__link" href="#">Get Involved <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i></a>
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