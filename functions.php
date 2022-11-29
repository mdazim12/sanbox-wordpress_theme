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
  wp_enqueue_style( '404_css',get_template_directory_uri().'/assets/css/erro404.css' ); 
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


 //project
 function san_project(){
   register_post_type('san_project',array(
      'labels'       =>array(
         'menu_name'       =>'Project',
         'name'            =>'Project',
         'add_new'         =>'Add Project',
         'all_items'       =>'All Project',
         'add_new_items'   =>'Add Project',
      ),
      'public'             =>true,
      'menu_icon'          =>'dashicons-format-gallery',
      'supports'           =>array('title','thumbnail'),
   ));

   register_taxonomy('portfolio_taxonomy','san_project',array(
      'labels'        =>array(
            'name'         =>'Project Category',
            'add_new_item'=>'Add new Project Category'
      ),
      'public'       =>true,
      'hierarchical' =>true,
      
      
   ));
 }
 add_action( 'init','san_project' );


 //Team
 function san_team(){
   register_post_type( 'san_team',array(
      'labels'    =>array(
         'menu_name'       =>'Team',
         'name'            =>'All Membber',
         'add_new'         =>' Add New Memeber',
         'add_items'       =>'All Membber',
         'add_new_items'   =>'Add Memeber',
         
      ),
      'public'             =>true,
      'menu_icon'          =>'dashicons-groups',
      'supports'           =>array('title','editor','thumbnail'),
   ));
 }
 add_action( 'init','san_team' );

 //price
  function san_price(){
   register_post_type('san_price',array(
      'labels'    =>array(
         'menu_name'       =>'Price',
         'name'            =>'Price List',
         'add_new'         =>'Add Price list',
         'add_new_items'   =>'Add Price List',
         'add_items'       =>'Price List',
      ),
      'public'             =>true,
      'menu_icon'          =>'dashicons-money-alt',
      'supports'           =>array('title'),
   ));
  }
  add_action('init','san_price');

  //Testimonial
 function san_testi(){
   register_post_type('san_testi',array(
      'labels'    =>array(
         'menu_name'       =>'Testimonial',
         'name'            =>'Testimonail',
         'add_new'         =>'Add New Client',
         'add_items'       =>'All Clients',
         'add_new_items'   =>'Add Clients'
      ),
      'public'       =>true,
      'menu_icon'    =>'dashicons-testimonial',
      'supports'     =>array('title','editor','thumbnail'),
   ));
 }
 add_action('init','san_testi');
















 /**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/inc/cmb_metabox.php';
require_once __DIR__ . '/inc/redux-framework-master/redux-framework.php';
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/sidebar.php';

require_once __DIR__ . '/inc/tgm/example.php';



 











