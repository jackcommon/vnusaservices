<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Index Template
 *
 *
 * @file           single-home-rectangle.php
 * @author         ducthinhdt
 * @filesource     wp-content/themes/responsive/single-home-rectangle.php
 */

get_header(); ?>

<!-- <div class="content_top">
  <h1 class="title">WE west meet East Geate the changes we want to see in our world TM</h1>
</div> -->
<div>
  <br>
</div>
<?php 
  // get_sidebar('uhome'); 
?>

<?php
  // $query = new WP_Query( array('post_type' => 'home-rectangle', 'posts_per_page' => -1 ) );
  // while ( $query->have_posts() ) : $query->the_post(); 
  while ( have_posts() ) : the_post();
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  $title = get_field("title");
  $image = get_field("image");
  $full_content = get_field("full_content");
?>
<div class="entry-content">
<!--   <div class="main" style="margin-left: auto; margin-right: auto; width: 500px">
    <p><img src='<?php echo $image?>' width='300' height='160' alt='<?php echo the_title(); ?>' /></p>
    <p><?php echo $full_content ?></p>
  </div> -->
  <div class="main" style="margin-left: auto; margin-right: auto;">
    <div align=middle>
      <img src='<?php echo $image?>' alt='<?php echo the_title(); ?>' />
    </div>
<?php 
  if ( is_single( 'home-english' ) ) {?>
    <div align=middle>
      <div>
        <span><a href="<?php echo site_url(); ?>/educationclubs/01_doveclub/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_1dove.png" width="240" alt="Logo center"></a></span>
        <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_2professionals.png" width="240" alt="Logo center"></a></span>
        <span><a href="<?php echo site_url(); ?>/educationclubs/03_boygirlclub/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_3boygirl.png" width="240" alt="Logo center"></a></span>
      </div>
      <div>
        <span><a href="<?php echo site_url(); ?>/educationclubs/04_single/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_4single.png" width="240" alt="Logo center"></a></span>
        <span><a href="<?php echo site_url(); ?>/educationclubs/05_successclub/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_5tienganhtiengviet.png" width="240" alt="Logo center"></a></span>
      </div>
      <div>
        <span><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_6cookingdancing.png" width="240" alt="Logo center"></a></span>
        <span><a href="<?php echo site_url(); ?>/educationclubs/07_crazyenglish/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_7crazyenglish.png" width="240" alt="Logo center"></a></span>
        <span><a href="<?php echo site_url(); ?>/educationclubs/08_traveling/"><img src="<?php echo get_template_directory_uri(); ?>/jacky/images/a_home_english_button_8travelingstudyabroad.png" width="240" alt="Logo center"></a></span>
      </div>
    </div>
<?php } else {
        $full_content_style = "";
        $ninja_form_id = 0;
        if (is_single('home-business-developing')){
          $ninja_form_id = 5;
          $full_content_style = "padding-left: 200px";
        } elseif (is_single('home-jobs')){
          $ninja_form_id = 5;
          $full_content_style = "padding-left: 50px";
        } elseif (is_single('home-other')){
          $ninja_form_id = 5;
        } elseif (is_single('home-traveling-visa')){
          $ninja_form_id = 5;
          $full_content_style = "padding-left: 200px";
        }
?>
      <div id="full-content" style="<?php echo $full_content_style ?>">
        <?php echo $full_content ?>
      </div>
      <div class="logo_center" align=right>
        <span id="click-to-join" class="languages_edu" style="cursor: pointer;">
          Click here to join!!!
        </span>
      </div>
      <div id="questionnaire">
        <p align=middle>====================oOo====================</p>
        <p><?php ninja_forms_display_form($ninja_form_id) ?></p>
      </div>
<?php } ?>
  <!--end of 'main'--></div>
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