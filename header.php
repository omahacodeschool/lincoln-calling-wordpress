<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/style.css" />
<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/assets/scripts/navScript.js"></script>

<?php wp_head(); ?>
</head>

<body>

<div class="outerContainer">
  <div class="header">
    <img src="<?php bloginfo("template_directory"); ?>/assets/images/header.png" alt="This is Lincoln Calling: music, art, innovation.">
  </div>

  <div class="nav">

    <ul>
      
      <?php wp_list_categories( array (
        'title_li' => '',
        'orderby' => 'id'
      ) ); ?>

      <!-- <div class="commentedOut">
        <li><a href="#">Buy Tickets</a></li>

        
        <li>
          <a href="#">Lineup <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i></a>

          <ul class="subNav">
          
            <li><a href="#">Music</a></li>

            <li><a href="#">Skate</a></li>

            <li><a href="#">Fit</a></li>

            <li><a href="#">Art</a></li>

            <li><a href="#">Night Market</a></li>

            <li><a href="#">Workshops</a></li>

            <li><a href="#">YP Week</a></li>

            <li><a href="#">Startup Week</a></li>

            <li><a href="#">Sustainability</a></li>

          </ul>

        </li>


        
        <li>
          <a href="#">Get Involved <i class="fa fa-caret-down navDownArrow" aria-hidden="true"></i></a>

          <ul>
            
            <li><a href="#">Link #1</a></li>

            <li><a href="#">Link #2</a></li>

            <li><a href="#">Link #3</a></li>
          </ul>
        </li>

        <li><a href="#">Updates</a></li>

        <li><a href="#">Fest Info</a></li>

        <li>
          <a href="#"><i class="fa fa-envelope-o newsletterLink" aria-hidden="true"></i>Newsletter</a>
        </li>
      </div> -->

    </ul>
  </div>