<?php
get_header();
$coupons=new WP_Query('cat=7&posts_per_page=200');

?>
<div class="site-content clearfix">
  <div class="subheader">
    <div class="divider">
        <hr class="left"/>About Us<hr class="right" />
    </div>
    <h4> <?php the_field('tag_line'); ?></h4>
  </div>
  <div class="main-column about_us">
    <div class="divider">
        <hr class="left"/><?php the_field('part_1_title'); ?><hr class="right" />
    </div>
    <div class="image"style="background-image: url('<?php the_field('picture_1'); ?>');"></div>

    <?php the_field('text_part_1'); ?>
    <div class="divider">
        <hr class="left"/><?php the_field('part_2_title'); ?><hr class="right" />
    </div>
    <div class="image"style="background-image: url('<?php the_field('picture_2'); ?>');"></div>
    <?php the_field('text_part_2'); ?>
  </div>
</div>

<?php get_footer();?>
