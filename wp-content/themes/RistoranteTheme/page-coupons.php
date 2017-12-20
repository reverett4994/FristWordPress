<?php
get_header();
$coupons=new WP_Query('cat=7&posts_per_page=200');

?>
<div class="site-content clearfix">
  <div class="main-column">
    <?php if($coupons ->have_posts()) :
      while ($coupons ->have_posts()) : $coupons ->the_post(); ?>
        <?php get_template_part('content',get_post_format()) ?>
      <?php endwhile;

    else :
      echo "</p>No Content</p>";

    endif;?>
  </div>


</div>



<?php get_footer();
wp_reset_postdata();
?>
