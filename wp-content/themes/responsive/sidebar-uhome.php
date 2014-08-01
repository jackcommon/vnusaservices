
<?php
  $args = array (
    'post_type' => 'home-sidebar',
    'show-posts' => -1
    );
    query_posts($args);
 ?>
 <div class="side_bar">
  <ul>
  <?php if ( have_posts()) : while( have_posts() ) : the_post();?>
    <li><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></li>
  <?php endwhile; endif; wp_reset_query(); ?>
  </ul>
</div>
