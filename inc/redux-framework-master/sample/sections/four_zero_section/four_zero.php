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
		'title'            => esc_html__( '404 page', 'sanbox' ),
		'id'               => 'four_s',
		'subsection'       => false,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'four_title',
				'type'     => 'text',
				'title'    => esc_html__( '404 Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
				'default'  => '404 - PAGE NOT FOUND'
			),

            array(
				'id'       => 'four_des',
				'type'     => 'editor',
				'title'    => esc_html__( '404 Description', 'sanbox' ),
				'subtitle' => esc_html__( 'Input description here', 'sanbox' ),
                'default'  => 'Customer satisfaction is our major goal. See what our customers are saying about us.'
				
			),

            array(
				'id'       => 'four_btn',
				'type'     => 'text',
				'title'    => esc_html__( '404 Button', 'sanbox' ),
				'subtitle' => esc_html__( 'Input button name here', 'sanbox' ),
                'default'  => 'Go home'
				
			),
            
           
		),
	)
);
