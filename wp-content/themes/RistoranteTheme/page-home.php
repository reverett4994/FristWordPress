<?php get_header();
$loop = new WP_Query( array( 'posts_per_page' => 5, 'orderby' => 'rand', 'meta_key' => '_thumbnail_id','cat' =>'3' ) );
?>

<div class="subheader">
  <div class="divider">
      <hr class="left"/><?php the_field('header'); ?><hr class="right" />
  </div>
  <h4> <?php the_field('tagline'); ?></h4>
</div>

<div class="owl-carousel owl-theme">
  <?php
  // The Loop
  if ( $loop->have_posts() ) {
  	while ( $loop->have_posts() ) {
  		$loop->the_post();
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
  		?>
      <a href='<?php the_permalink() ?>' > <div class="item"  style="background-image: url('<?php echo $url ?>');"> </div> </a>

      <?php
  	}
  	/* Restore original Post Data */
  	wp_reset_postdata();
  }
  ?>
</div>

<div class="home_square left" style="background-image: url('<?php the_field('picture_1'); ?>');" ></div>
<div class="home_square right"> <p><?php the_field('text_1'); ?></p> </div>

<div class="home_square left"> <p><?php the_field('text_2'); ?></p> </div>
<div class="home_square right" style="background-image: url('<?php the_field('picture_2'); ?>');" ></div>

<div class="home_square left" style="background-image: url('<?php the_field('picture_3'); ?>');" ></div>
<div class="home_square right"> <p><?php the_field('text_3'); ?></p> </div>

<?php get_footer();?>
