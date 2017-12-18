<?php
get_header();
if(have_posts()) :
  while (have_posts()) : the_post(); ?>
    <div class="post page">
       <?php the_content(); ?>
    </div>
  <?php endwhile;

else :
  echo "</p>No Content</p>";

endif;
?>
<div class="half">

  <?php
  // Food loop here
  $foods=new WP_Query('cat=4&posts_per_page=2');
  if($foods -> have_posts()) :
    while ($foods -> have_posts()) : $foods -> the_post(); ?>
        <h2><?php the_title() ?></h2>
        <p><?php echo get_the_excerpt(); ?>
         <a href=<?php the_permalink(); ?>>read more</a>
       </p>
    <?php endwhile;

  else :
    echo "</p>No Content</p>";

  endif;
  wp_reset_postdata();
  ?>
</div>

<div class="half last">
  <?php
  // News loop here
  $news=new WP_Query('cat=5&posts_per_page=2');
  if($news -> have_posts()) :
    while ($news -> have_posts()) : $news -> the_post(); ?>
        <h2><?php the_title() ?></h2>
        <p><?php echo get_the_excerpt(); ?>
         <a href=<?php the_permalink(); ?>>read more</a>
       </p>
    <?php endwhile;

  else :
    echo "</p>No Content</p>";

  endif;
  wp_reset_postdata();
  ?>
</div>

<?php

get_footer();

?>
