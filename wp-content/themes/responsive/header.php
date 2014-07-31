<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
  <!doctype html>
  <!--[if !IE]>
  <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
  <!--[if IE 7 ]>
  <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
  <!--[if IE 8 ]>
  <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
  <!--[if IE 9 ]>
  <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
  <!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '&#124;', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
    <link href="<?php echo get_template_directory_uri(); ?>/core/css/home.css"/>


    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<!--<script type="text/javascript" src="http://scmplayer.net/script.js" 
data-config="{'skin':'skins/tunes/skin.css','volume':55,'autoplay':true,'shuffle':true,'repeat':1,'placement':'top','playlist':'https://soundcloud.com/queanhpharma/sets/s-n-t-ng-m-tp'}" ></script>-->

<!-- https://soundcloud.com/yanni-music/sets/yanni-inspirato -->
<script type="text/javascript" src="./jacky/VNAKAmusicplayer/script.js" 
data-config="{'skin':'skins/tunes/skin.css','volume':60,'autoplay':true,'shuffle':true,'repeat':1,'placement':'top','playlist':'https://soundcloud.com/hesham-beram-1/sets/yanni'}" ></script>


<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
  <div id="header">

    <?php responsive_header_top(); // before header content hook ?>

    <?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
      <?php wp_nav_menu( array(
                   'container'      => '',
                   'fallback_cb'    => false,
                   'menu_class'     => 'top-menu',
                   'theme_location' => 'top-menu'
                 )
      );
      ?>
    <?php } ?>

    <?php responsive_in_header(); // header hook ?>
    <div id="newannouncement">
      <?php newannouncement( $group = "GROUP1" ); ?>
    </div>
    <?php if( get_header_image() != '' ) : ?>
      <div id="top">
        <span id="logo">
          <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/logo_vnusa.png" alt="<?php bloginfo( 'name' ); ?>"/></a>
        </span>
        <span id="banner">
          <img src="<?php echo get_template_directory_uri(); ?>/jacky/images/banner_140723.png" alt="<?php bloginfo( 'name' ); ?>"/>
        </span>
        <span id="qrcode">
          <img src="<?php echo get_template_directory_uri(); ?>/jacky/images/qrcode.png" alt="<?php bloginfo( 'name' ); ?>"/>
        </span>
        <!-- /#banner_top -->
      </div>

    <?php endif; // header image was removed ?>

<!--     <?php if( !get_header_image() ) : ?>

      <div id="logo">
        <span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
        <span class="site-description"><?php bloginfo( 'description' ); ?></span>
      </div>

    <?php endif; // header image was removed (again) ?> -->

<?php
  if ( !is_page('Landing Page')){
?>
    <div id="hello" style="padding-top: -50px;">
      <!--<?php get_sidebar( 'top' ); ?>-->
      <?php wp_nav_menu( array(
                   'container'       => 'div',
                   'container_class' => 'main-nav',
                   'fallback_cb'     => 'responsive_fallback_menu',
                   'theme_location'  => 'header-menu'
                 )
      );
      ?>
<!--
      <?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
        <?php wp_nav_menu( array(
                     'container'      => '',
                     'menu_class'     => 'sub-header-menu',
                     'theme_location' => 'sub-header-menu'
                   )
        );
        ?>
      <?php } ?>
-->
    </div>
<?php
  }
?>

    <?php responsive_header_bottom(); // after header content hook ?>

  </div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
  <div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>

<!-- /.slide-top -->