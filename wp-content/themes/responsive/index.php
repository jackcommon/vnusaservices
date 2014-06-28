<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Index Template
 *
 *
 * @file           index.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/index.php
 * @link           http://codex.wordpress.org/Theme_Development#Index_.28index.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div class="content_top">
  <h1 class="title">WE west meet East Geate the changes we want to see in our world TM</h1>
<!-- /.content_top --></div>

<?php get_sidebar('sidebar'); ?>

<div id="content" class="">
  <div id="rectangle">
    <div class="business">
      <p><a href="#">Business Developing</a></p>
    <!-- /.business --></div>
    <div class="logo_center">
      <ul>
        <li class="last"><a href="#" class="traveling">Traveling - VISA</a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/core/images/default-logo.png" width="240" height="130" alt="Logo center"></a></li>
        <li class="last"><a href="#" class="languages_edu">Languages - Education</a></li>
      </ul>   
    <!-- /.logo_center --></div>
    <div class="row_other">
      <ul>
        <li><a href="#" class="other">Other</a></li>
        <li><a href="#" class="jobs">Jobs</a></li>
      </ul>
    <!-- /.row_other --></div>
  <!-- /#rectangle --></div>
</div><!-- end of #content -->


<?php get_footer(); ?>