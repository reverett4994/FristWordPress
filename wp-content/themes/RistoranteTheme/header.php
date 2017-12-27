<!DOCTYPE html >
<html <?php language_attributes();?>>
  <head>
    <meta charset=" <?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <title> <?php bloginfo('name')?></title>
    <?php wp_head();?>
  </head>

  <body <?php body_class();?> >

      <div class="header">
        <div class="logo">
          <a href='/wordpress2'>Dino's Demo Risotante</a>
        </div>
        <div class="nav">
          <?php
            $args = array(
              'theme_location' => 'header'
            )
            ?>
            <?php  wp_nav_menu($args);?>
        </div>
      </div>
