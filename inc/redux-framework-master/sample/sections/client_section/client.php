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
		'title'            => esc_html__( 'Client Section', 'sanbox' ),
		'id'               => 'client_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'Client_mini_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Client Mini Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your mini title here', 'sanbox' ),
				'default'  => 'our client azim'
			),
            array(
				'id'       => 'Client_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Client  Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
				'default'  => 'Trusted by over 300+'
			),
            array(
				'id'       => 'Client_des',
				'type'     => 'editor',
				'title'    => esc_html__( 'Client  Description', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your description here', 'sanbox' ),
				'default'  => 'We bring solutions to make life easier for our customers. azim'
			),
			
			
			
		),
	)
);
