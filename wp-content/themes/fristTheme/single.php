<?php
get_header();
if(have_posts()) :
  while (have_posts()) : the_post(); ?>
    <div class="post">
      <h2><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h2>
      <p class='post_info'> <?php the_time('F jS, Y'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author()?></a>
      | Posted in <?php

        $cats= get_the_category();
        $separator= ", ";
        $output= "";

        if ($cats) {
          foreach($cats as $cat){
            $output .= "<a href='".get_category_link($cat->term_id)."'>".$cat->cat_name."</a>". $separator;
          }
        }
        echo trim($output, $separator);

      ?></p>
      <?php the_post_thumbnail('banner-image'); ?>
      <p><?php the_content(); ?></p>

    </div>

  <?php endwhile;

else :
  echo "</p>No Content</p>";

endif;


get_footer();

?>
