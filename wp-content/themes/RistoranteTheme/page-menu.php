<?php
get_header();
?>
<div class="site-content clearfix">

  <div class="half">

    <?php
    // Food loop here
    $foods=new WP_Query('cat=3&posts_per_page=2');
    if($foods -> have_posts()) :
      while ($foods -> have_posts()) : $foods -> the_post(); ?>
        <?php get_template_part('content',get_post_format()) ?>
      <?php endwhile;

    else :
      echo "</p>No Content</p>";

    endif;
    wp_reset_postdata();
    ?>
  </div>

</div>



<?php get_footer();

?>
