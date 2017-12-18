<?php
if ( in_category('Menu Item') ) {
    ?>MENU<?php
    // Continue with normal Loop
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part('content',get_post_format());
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
 ?>
