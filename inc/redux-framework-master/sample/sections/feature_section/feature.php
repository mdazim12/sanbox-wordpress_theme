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
		'title'            => esc_html__( 'Feature Section', 'sanbox' ),
		'id'               => 'feature_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'feature_mini_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Client Mini Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your mini title here', 'sanbox' ),
				'default'  => 'our client azim'
			),
            array(
				'id'       => 'feature_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Client  Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
				'default'  => 'Trusted by over 300+'
			),
            
			
			
			
		),
	)
);
