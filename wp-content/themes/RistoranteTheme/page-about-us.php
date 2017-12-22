<?php
get_header();
$coupons=new WP_Query('cat=7&posts_per_page=200');

?>
<div class="site-content clearfix">
  <div class="main-column about_us">
    <img src="<?php the_field('picture_1');?>">
    <img src="<?php the_field('picture_2');?>">
    <?php the_field('about_us_text'); ?>
  </div>
</div>

<?php get_footer();?>
