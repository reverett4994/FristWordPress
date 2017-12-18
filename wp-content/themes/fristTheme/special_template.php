<?php

/*
Template Name: Special Layout
*/
get_header();
if(have_posts()) :
  while (have_posts()) : the_post(); ?>
    <div class="post page">
      <h2> <?php the_title(); ?></h2>
      <div class="info_box">
        <h4>Disclaimer Text</h4>
        <p>
          Years is firmament fruitful without you you'll given fly fly form let seasons two which creepeth spirit waters likeness were of lights make. Place him place moving gathering. Our female i. First of replenish without green sixth, brought deep abundantly beginning living grass.
        </p>

      </div>
      <p><?php the_content(); ?></p>
    </div>

  <?php endwhile;

else :
  echo "</p>No Content</p>";

endif;


get_footer();

?>
