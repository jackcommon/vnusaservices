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
  $full_content_multi = get_field("full_content_multi");
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
      <div align=left><br>
        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For more information, please click on each icon below:</b>
      </div>
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
        $ninja_form_id2 = 0;
        if (is_single('home-business-developing')){
          $ninja_form_id = 2;
          $full_content_style = "padding-left: 200px";
        } elseif (is_single('home-jobs')){
          $ninja_form_id = 3;
          $ninja_form_id2 = 4;
          $full_content_style = "padding-left: 50px";
        } elseif (is_single('home-other')){
          // $ninja_form_id = 5;
        } elseif (is_single('home-traveling-visa')){
          $ninja_form_id = 6;
          $ninja_form_id2 = 7;          
          $full_content_style = "padding-left: 200px";
        }

        if (qtrans_getLanguage()=="vi"){
          if (is_single('home-business-developing')){
            $ninja_form_id = 2;
            $full_content_style = "padding-left: 200px";
          } elseif (is_single('home-jobs')){
            $ninja_form_id = 11;
            $ninja_form_id2 = 12;
            $full_content_style = "padding-left: 50px";
          } elseif (is_single('home-other')){
            // $ninja_form_id = 5;
          } elseif (is_single('home-traveling-visa')){
            $ninja_form_id = 9;
            $ninja_form_id2 = 10;      
            $full_content_style = "padding-left: 200px";
          }
        }
?>
      <div class="full-content" style="<?php echo $full_content_style ?>">
        <?php echo $full_content_multi ?>
      </div>
      <?php if ( $ninja_form_id !== 0 ){ ?>
        <div class="survey" align=right>
          <span id="click_to_join" style="cursor: pointer;">
            <?php if( function_exists( 'qtrans_getLanguage' ) ){
              if (qtrans_getLanguage()=="en"){
                if (is_single('home-jobs')){
                  echo "Click here to Seeking For A Job!!!";
                } elseif (is_single('home-traveling-visa')) {
                  echo "Click here to register VISA For Foreigner!!!";
                } else {
                  echo "Click here to join!!!";
                }
              } elseif ((qtrans_getLanguage()=="vi")) {
                if (is_single('home-jobs')){
                  echo "Nhấn vào đây để đăng ký Tìm Việc!!!";
                } elseif (is_single('home-traveling-visa')) {
                  echo "Nhấn vào đây để đăng ký VISA Cho Người Nước Ngoài";
                } else {
                   echo "Nhấn vào đây để đăng ký!!!";
                }
              } 
            }?>
          </span>
        <?php if ((is_single('home-jobs')) || (is_single('home-traveling-visa'))){?>
          <span id="click_to_join2" style="cursor: pointer;">
            <?php if( function_exists( 'qtrans_getLanguage' ) ){
              if (qtrans_getLanguage()=="en"){
                if (is_single('home-jobs')){
                  echo "Click here to Seeking For Employees!!!";
                } elseif (is_single('home-traveling-visa')) {
                  echo "Click here to register VISA For Vietnamese!!!";
                }
              } elseif ((qtrans_getLanguage()=="vi")) {
                if (is_single('home-jobs')){
                  echo "Nhấn vào đây để đăng ký Tìm Nhân Viên!!!";
                } elseif (is_single('home-traveling-visa')) {
                  echo "Nhấn vào đây để đăng ký VISA Cho Người Việt Nam";
                }
              } 
            }?>
          </span>
        <?php } ?>
        </div>
        <div id="questionnaire">
          <p align=middle>====================oOo====================</p>
          <p><?php ninja_forms_display_form($ninja_form_id) ?></p>
        </div>
          <?php if ((is_single('home-jobs')) || (is_single('home-traveling-visa'))){?>
            <div id="questionnaire2">
              <p align=middle>====================oOo====================</p>
              <p><?php ninja_forms_display_form($ninja_form_id2) ?></p>
            </div>
          <?php } ?>
      <?php } ?>
<?php } ?>
  <!--end of 'main'--></div>
</div>
<div>
  <script src="<?php echo get_template_directory_uri(); ?>/jacky/js/jquery-2.1.1.min.js"></script> 
  <script>
    $( "#questionnaire" ).hide();
    $( "#click_to_join" ).click(function() {
      $( "#questionnaire2" ).hide();
      $( "#questionnaire" ).slideToggle( "slow" );
    });

    $( "#questionnaire2" ).hide();
    $( "#click_to_join2" ).click(function() {
      $( "#questionnaire" ).hide();
      $( "#questionnaire2" ).slideToggle( "slow" );
    });
  </script>
</div>
<?php wp_reset_postdata(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>