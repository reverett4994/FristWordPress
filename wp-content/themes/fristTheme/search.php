<?php
get_header();
if(have_posts()) :
  ?>
    <h2>Search results for: <?php the_search_query(); ?></h2>
  <?php
  while (have_posts()) : the_post(); ?>
    <?php get_template_part('content',get_post_format()) ?>
  <?php endwhile;

else :
  echo "</p>No Content</p>";

endif;


get_footer();

?>
