<?php
get_header();
?>
<div class="site-content clearfix">
  <div class="main-column">
    <?php if(have_posts()) :
      while (have_posts()) : the_post(); ?>
        <?php get_template_part('content',get_post_format()) ?>
      <?php endwhile;

    else :
      echo "</p>No Content</p>";

    endif;?>
  </div>


</div>



<?php get_footer();

?>
