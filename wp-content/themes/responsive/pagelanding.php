<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Landing Page Template
 *
Template Name:  Landing Page
 *
 * @file           pagelanding.php
 * @author         ducthinhdt
 * @filesource     wp-content/themes/responsive/pagelanding.php
 */

get_header(); ?>

<div id="content">
  <div id="rectangle">
    <div class="logo_center">
      <ul>
        <li><a href="http://localhost/vnusaservices/home-page/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_landingPage2.png" width="600" alt="Logo center"></a></li>
      </ul>   
    </div>
  </div>
</div>

<?php get_sidebar('left'); ?>

<?php get_footer(); ?>
