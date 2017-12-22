<?php
  $custom_fields = get_post_custom($post_id);
  $my_custom_field = $custom_fields['price'];
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
?>

  <div class="menu_listing"  style="background-image: url('<?php echo $url ?>');">

    <div class="overlay">
      <p class="hover-title"><?php the_title() ?></p>
      <p class="hover-text">Price: $<?php echo $my_custom_field['0']; ?></p>

      <a class="custom-button" href="<?php the_permalink(); ?>">More Details</a>
    </div>
  </div>
