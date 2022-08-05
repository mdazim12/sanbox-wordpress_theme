<?php
/**
 * Redux Framework checkbox config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Comunity  Section', 'sanbox' ),
		'id'               => 'comunity_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'com_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Price Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
				'default'  => 'Price section'
			),

            array(
				'id'       => 'com_des',
				'type'     => 'editor',
				'title'    => esc_html__( 'Comunity Description', 'sanbox' ),
				'subtitle' => esc_html__( 'Input description here', 'sanbox' ),
                'default'  => 'we are trusted by over 5000+ clients. Join them by'
				
			),
            array(
				'id'       => 'com_btn',
				'type'     => 'text',
				'title'    => esc_html__( 'Comunity Button', 'sanbox' ),
                'default'  => 'Button'
				
			),
            array(
				'id'       => 'com_btn_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Comunity Button URL', 'sanbox' ),
                'default'  => '#'
				
			),
            array(
				'id'       => 'Com_icon',
				'type'     => 'media',
                'url'      =>true,
				'title'    => esc_html__( 'Comunity Icon ', 'sanbox' ),
                
				
			),
            
        
			
			
			
		),
	)
);
