<?php
  $custom_fields = get_post_custom($post_id);
  $my_custom_field = $custom_fields['code'];
  // get raw date
  $date = get_field('expiration_date', false, false);
  // make date object
  $date = new DateTime($date);
?>
<div class="post">
  <div class="coupon_listing">
    <h2> <?php the_title() ?></h2>
    <h3><?php  the_content(); ?> </h3>
    <p>Code: <strong><?php echo $my_custom_field['0']; ?></strong></p>
    <p class='mini-meta'>Added on: <?php the_time('F j, Y') ?></p>
    <p>Expiration Date: <?php echo $date->format('j M Y'); ?></p>
  </div>
</div>



<?php
