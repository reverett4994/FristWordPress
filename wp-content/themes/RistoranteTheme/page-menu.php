<?php
get_header();
?>
<div class="site-content clearfix">

  <div class="half">
    <div class="divider">
        <hr class="left"/>Main Dishes<hr class="right" />
    </div>
    <?php
    // Food loop here
    $foods=new WP_Query('cat=3&tag=main&posts_per_page=200&orderby=title&order=ASC');
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

  <div class="half">
    <div class="divider">
        <hr class="left"/>Sides<hr class="right" />
    </div>
    <?php
    // Food loop here
    $foods=new WP_Query('cat=3&tag=side&posts_per_page=200&orderby=title&order=ASC');
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

  <div class="half">

    <div class="divider">
        <hr class="left"/>Drinks<hr class="right" />
    </div>
    <?php
    // Food loop here
    $foods=new WP_Query('cat=3&tag=drink&posts_per_page=200&orderby=title&order=ASC');
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
