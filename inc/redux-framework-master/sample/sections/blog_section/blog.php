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
		'title'            => esc_html__( 'Blog Section', 'sanbox' ),
		'id'               => 'blog_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'blog_mini_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Blog Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
				'default'  => 'Customare'
			),

            array(
				'id'       => 'blog_des',
				'type'     => 'editor',
				'title'    => esc_html__( 'Blog Description', 'sanbox' ),
				'subtitle' => esc_html__( 'Input description here', 'sanbox' ),
                'default'  => 'Customer satisfaction is our major goal. See what our customers are saying about us.'
				
			),
           
		),
	)
);
