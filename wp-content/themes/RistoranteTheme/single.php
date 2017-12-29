<?php
get_header();
if ( in_category('Menu Item') ) {
    ?><?php
    // Continue with normal Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        $custom_fields = get_post_custom($post_id);
        $my_custom_field = $custom_fields['price'];
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
        ?>
        <div class='single_wrapper'>
          <div class="banner" style="background-image: url('<?php echo $url ?>');"></div>
          <h1><?php the_title(); ?></h1>
          <h2> Price: $<?php echo $my_custom_field['0']; ?></h2>
          <p>
            <?php the_content(); ?>
          </p>

        <?php comment_form(); ?>

        <ol class="commentlist">
        	<?php
        		//Gather comments for a specific page/post
        		$comments = get_comments(array(
        			'post_id' => $post->ID,
        			'status' => 'approve' //Change this to the type of comments to be displayed
        		));

        		//Display the list of comments
        		wp_list_comments(array(
        			'per_page' => 10, //Allow comment pagination
        			'reverse_top_level' => false //Show the oldest comments at the top of the list
        		), $comments);
        	?>
        </ol>

        </div>
        <?php

      endwhile;
    endif;

} elseif ( in_category('vegetables') ) {
    // include 'single-vegetables.php';
} else {
    // Continue with normal Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    // ...
      get_template_part('content',get_post_format());
      endwhile;
    endif;
}
get_footer();
 ?>
