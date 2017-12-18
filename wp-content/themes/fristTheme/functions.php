<?php
function learningWordPress(){
  wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','learningWordPress');



//Get Top Ancestor

function get_top_ancestor_id(){
  global $post;
  if ($post ->post_parent) {
    $parents=array_reverse(get_post_ancestors($post->ID));
    return $parents[0];
  }
  return $post->ID;
}

function has_children(){
  global $post;

  $pages = get_pages ('child_of=' . $post->ID);
  return count($pages);
}

function custom_excerpt_length(){
  return 25;
}

add_filter('excerpt_length','custom_excerpt_length');


//Theme Setup
function learning_wp_setup(){
  //Feature Image Support
  add_theme_support('post-thumbnails');
  // width,height,cropping
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner-image', 920, 210, array( 'left', 'top' ));
  //nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'foote r' => __('Footer Menu'),
  ));

  // add post format stream_support
  add_theme_support('post-formats',array('aside','gallery','link'));

  // add widget locations
  function ourWidgetsInit(){
    register_sidebar(array(
      'name' => 'Sidebar',
      'id' => 'sidebar1',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="rounded">',
      'after_title' => '</h2>',
    ));

    register_sidebar(array(
      'name' => 'Footer 1',
      'id' => 'footer1'
    ));
    register_sidebar(array(
      'name' => 'Footer 2',
      'id' => 'footer2'
    ));
    register_sidebar(array(
      'name' => 'Footer 3',
      'id' => 'footer3'
    ));
    register_sidebar(array(
      'name' => 'Footer 4',
      'id' => 'footer4'
    ));
  }

}

add_action('after_setup_theme','learning_wp_setup');
add_action('widgets_init','ourWidgetsInit');


// Customize Appearance Options
function learning_wp_cusomize_register($wp_customize){
  $wp_customize->add_setting('link_color',array(
    'default' => "#006ec3",
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('btn_color',array(
    'default' => "#006ec3",
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting('btn_hover_color',array(
    'default' => "#006ec3",
    'transport' => 'refresh',
  ));
  $wp_customize->add_section('standard_colors',array(
    'title'=>__('Standard Colors','LearningWordPress'),
    'priority'=>30,
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'link_color_control',array(
    'label'=>__("Link Color",'LearningWordPress'),
    'section'=>'standard_colors',
    'settings'=>'link_color',
  )));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'btn_color_control',array(
    'label'=>__("Button Color",'LearningWordPress'),
    'section'=>'standard_colors',
    'settings'=>'btn_color',
  )));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'btn_hover_color_control',array(
    'label'=>__("Button Hover Color",'LearningWordPress'),
    'section'=>'standard_colors',
    'settings'=>'btn_hover_color',
  )));
}
add_action('customize_register','learning_wp_cusomize_register');

// Output Custom CSS
function customize_css(){
  ?>
    <style type="text/css">
      a:link,
      a:visited{
        color:<?php echo get_theme_mod('link_color') ?>;
      }
      /*WP selector class current-menu-item*/
     .site_header .nav ul li.current-menu-item a:link, .site_header .nav ul li.current-menu-item a:visited {
        background-color:<?php echo get_theme_mod('link_color') ?>;
      }
      .site_header .nav ul li.current-page-ancestor a:link,.site_header .nav ul li.current-page-ancestor a:visited{
        background-color:<?php echo get_theme_mod('link_color') ?>;
      }

      .search_form .search-submit{
        background-color:<?php echo get_theme_mod('btn_color') ?>;
      }
      .search_form .search-submit:hover{
        background-color:<?php echo get_theme_mod('btn_hover_color') ?>;
      }
    </style>
  <?php
}
add_action('wp_head','customize_css');


 ?>
