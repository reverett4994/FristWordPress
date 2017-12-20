<?php
  $custom_fields = get_post_custom($post_id);
  $my_custom_field = $custom_fields['price'];
?>

<div class="post">

  <div class="menu_listing">
    <h2> <?php the_title() ?></h2>
    <h3> Price: $<?php echo $my_custom_field['0']; ?> </h3>
  </div>

  <div class="menu_dropdown">
    <p class='mini-meta'>Updated at: <?php the_time('F j, Y') ?></p>
    <?php the_post_thumbnail('menu') ?>
    <div class='menu_info'><?php the_content(); ?></p>
  </div>

</div>

</div>



<?php
