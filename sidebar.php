<?php

function san_widget(){
    register_sidebar( 
        array(
            'id'            =>'sidebar_widget',
            'name'          =>__('Sidebar Widget'),
            'description'   =>__('A short description of the sidebar'),
            'before_widget' =>'<div class="widget">',
            'after_widget'  =>'</div>',
            'before_title'  =>'<h4 class="widget-title mb-3">',
            'after_widget'  =>'</h4>',
        ),
    register_sidebar(
        array(
            'id'            => 'footer_widgets_one',
            'name'          => __( 'Footer Widgets one' ),
            'description'   => __( 'A short description of the widget one.' ),
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title text-white mb-3">',
            'after_title'   => '</h4>',
        )
        ),
    register_sidebar(
            array(
                'id'            => 'footer_widgets_two',
                'name'          => __( 'Footer Widgets two' ),
                'description'   => __( 'A short description of the widget two.' ),
                'before_widget' => '<div class="widget">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title text-white mb-3">',
                'after_title'   => '</h4>',
            )
            ),
    register_sidebar(
                array(
                    'id'            => 'footer_widgets_three',
                    'name'          => __( 'Footer Widgets three' ),
                    'description'   => __( 'A short description of the widget four.' ),
                    'before_widget' => '<div class="widget">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h4 class="widget-title text-white mb-3">',
                    'after_title'   => '</h4>',
                )
             ),
    register_sidebar(
                    array(
                        'id'            => 'footer_widgets_four',
                        'name'          => __( 'Footer Widgets four' ),
                        'description'   => __( 'A short description of the widget four.' ),
                        'before_widget' => '<div class="widget">',
                        'after_widget'  => '</div>',
                        'before_title'  => '<h4 class="widget-title text-white mb-3">',
                        'after_title'   => '</h4>',
                    )
                 )
        
    );
}
add_action( 'widgets_init','san_widget' );











?>