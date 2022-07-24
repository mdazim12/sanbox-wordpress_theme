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
  wp_enqueue_style( 'style',get_stylesheet_uri() ); 


  //js file
  
  wp_enqueue_script( 'boostrap',get_template_directory_uri().'/assets/js/plugins.js', 'jquery','v1.0',true );
  wp_enqueue_script( 'theme',get_template_directory_uri().'/assets/js/theme.js', 'jquery','v1.0',true );
 }
 add_action('wp_enqueue_scripts','san_all_link' );



 register_nav_menus(array(
    'primary_menu'      =>'primary Menu',
    'footer_menu'      =>'Footer Menu',

 ));
 require_once('inc/class-wp-bootstrap-navwalker.php');


/// services post 
 function san_services(){
   register_post_type('san_services',array(
      'labels'    =>array(
         'menu_name'    =>'Services',
         'name'         =>'Service',
         'add_new'      =>'Add New',
         'all_items'    =>'Services',
         'add_new_items'=>'Add New',
      ),
      'public'             => true,
      'menu_icon'          =>'dashicons-images-alt2',
      'supports'           =>array('thumbnail','title','editor'),
   ));

 }
 add_action( 'init','san_services');


 //client post
 function san_client(){
   register_post_type('san_client',array(
      'labels'    =>array(
         'menu_name'    =>'Clients',
         'name'         =>'Clients',
         'add_new'      =>'Add New',
         'all_items'    =>'Clients',
         'add_new_items'=>'Add New',
      ),
      'public'          =>true,
      'menu_icon'       =>'dashicons-grid-view',
      'supports'        =>array('thumbnail'),
   ));

 }
 add_action('init','san_client' );


 //FAQ post
 function FAQ_client(){
   register_post_type('FAQ_client',array(
      'labels'    =>array(
         'menu_name'    =>'FAQ',
         'name'         =>'FAQ',
         'add_new'      =>'Add New Question',
         'all_items'    =>'FAQ',
         'add_new_items'=>'Add New Question',
      ),
      'public'          =>true,
      'menu_icon'       =>'dashicons-editor-rtl',
      
   ));

 }
 add_action('init','FAQ_client' );


 











