<!DOCTYPE html >
<html <?php language_attributes();?>>
  <head>
    <meta charset=" <?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name')?></title>
    <?php wp_head();?>
  </head>

  <body <?php body_class();?> >
    <div class="wrapper">
      <header class="site_header">
        <div class="search_form">
          <?php get_search_form() ?>
        </div>
        <h1> <a href=" <?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h5><?php bloginfo('description'); ?>
          <?php if (is_page('menu')) { ?>
            - Yum!
          <?php } ?>
        </h5>
        <div class="nav">
          <?php
            $args = array(
              'theme_location' => 'primary'
            )
            ?>
            <?php  wp_nav_menu($args);?>
        </div>
      </header>
