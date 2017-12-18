<?php
get_header();
if(have_posts()) :
  while (have_posts()) : the_post(); ?>
    <div class="post page">
      <div class="nav parent_nav">

        <?php if (has_children() OR $post ->post_parent >0){ ?>

        <span class="parent_link"><a href= "<?php echo get_the_permalink(get_top_ancestor_id()) ?>" > <?php echo get_the_title(get_top_ancestor_id()) ?></a></span>
        <ul>
          <?php $args = array(
            'child_of' =>get_top_ancestor_id(),
            'title_li' => ''
          ); ?>
          <?php wp_list_pages($args); ?>
      </ul>
    <?php } ?>
      </div>

      <h2> <?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>

  <?php endwhile;

else :
  echo "</p>No Content</p>";

endif;


get_footer();

?>
