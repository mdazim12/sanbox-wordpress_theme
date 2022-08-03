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
		'title'            => esc_html__( 'About Images', 'sanbox' ),
		'id'               => 'about_img_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'about_img',
				'type'     => 'media',
                'url'      => true,
				'title'    => esc_html__( 'About Images', 'sanbox' ),
				'subtitle' => esc_html__( 'Upload your about Images', 'sanbox' ),
				'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),
			),
			
			
			
		),
	)
);
