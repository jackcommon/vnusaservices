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

<!-- <div class="content_top">
  <h1 class="title">WE west meet East Geate the changes we want to see in our world TM</h1>
</div> -->

<div class="content_uhome">

<?php get_sidebar('uhome'); ?>

<div class="entry_content clearfix">  
<?php
  // $query = new WP_Query( array('post_type' => 'home-rectangle', 'posts_per_page' => -1 ) );
  // while ( $query->have_posts() ) : $query->the_post(); 
  while ( have_posts() ) : the_post();
  // if ( has_post_thumbnail() ) {
  //   the_post_thumbnail();
  // }
  $title = get_field("title");
  $image = get_field("image");
  $full_content = get_field("full_content");
  $full_content_multi = get_field("full_content_multi");
?>

  <div class="main" align='middle'>
    <p><img src='<?php echo $image?>' width='400' height='10' alt='<?php echo the_title(); ?>'/></p>
    <p><?php echo $full_content ?></p>
    <p><?php echo $full_content_multi ?></p>
  </div><!-- /.main -->

<?php wp_reset_postdata(); ?>
<?php endwhile; ?>
<!-- /.entry_content --></div>

<!-- /.content_uhome --></div>

<?php get_footer(); ?>