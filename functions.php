<?php


function theme_support(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' ); 
    
 }
 add_action( 'after_setup_theme','theme_support' );


 function san_all_link(){
  //css links
  wp_enqueue_style( 'plugin',get_template_directory_uri().'/assets/css/plugins.css' ); 
  wp_enqueue_style( 'pre_load',get_template_directory_uri().'/assets/css/fonts/thicccboi.css' ); 
 wp_enqueue_style( 'main_css',get_template_directory_uri().'/assets/css/style.css' ); 
  wp_enqueue_style( 'yellow_css',get_template_directory_uri().'/assets/css/colors/yellow.css' ); 
  //wp_enqueue_style( 'style',get_template_directory_uri().'/assets/css/colors/yellow.css' ); 


  //js file
  
  wp_enqueue_script( 'boostrap',get_template_directory_uri().'/assets/js/plugins.js', 'jquery','v1.0',true );
  wp_enqueue_script( 'theme',get_template_directory_uri().'/assets/js/theme.js', 'jquery','v1.0',true );





 }
 add_action('wp_enqueue_scripts','san_all_link' );













