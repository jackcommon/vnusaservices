<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Index Template
 *
 *
 * @file           single-educationclubs.php
 * @author         ducthinhdt
 * @filesource     wp-content/themes/responsive/single-educationclubs.php
 */

get_header(); ?>

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
?>
<div class="entry-content">
  <div class="main" style="margin-left: auto; margin-right: auto; width: 450px" align='middle'>
    <p><img src='<?php echo $image?>' width='500' alt='<?php echo the_title(); ?>'/></p>
  </div>
  <div class="full-content" style="padding-left: 200px;">
    <?php echo $full_content ?>
  </div>
  <div class="logo_center" align=right>
    <span id="click-to-join" class="languages_edu" style="cursor: pointer;">
      Click here to join!!!
    </span>
  </div>
  <div id="questionnaire">
    <p align=middle>====================oOo====================</p>
<?php
  if ( is_singular( 'home-rectangle') ) { 
    echo "This is a child page";
  } elseif ( is_singular( 'educationclubs') ) {?>
    <p><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?></p>
<?php 
  } 
?>
  </div>
</div>
<div>
  <script src="<?php echo get_template_directory_uri(); ?>/jacky/js/jquery-2.1.1.min.js"></script> 
  <script>
    $( "#questionnaire" ).hide();
    $( "#click-to-join" ).click(function() {
      $( "#questionnaire" ).slideToggle( "slow" );
    });
  </script>
</div>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>