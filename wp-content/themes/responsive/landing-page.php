<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Landing Page Template
 *
Template Name:  Landing Page (no menu)
 *
 * @file           landing-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/landing-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content">
  <div id="rectangle">
    <div class="logo_center">
      <ul>
        <li><img src="<?php echo get_template_directory_uri(); ?>/images/a_landingPage2.png" width="600" alt="Logo center"></li>
      </ul>   
    </div>
  </div>
</div>

<?php get_sidebar('left'); ?>

<?php get_footer(); ?>
