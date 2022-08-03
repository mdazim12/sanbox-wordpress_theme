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
		'title'            => esc_html__( 'Feature Images', 'sanbox' ),
		'id'               => 'feature_img_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'feature_img',
				'type'     => 'media',
                'url'      => true,
				'title'    => esc_html__( 'Feaure Images', 'sanbox' ),
				'subtitle' => esc_html__( 'Upload your Feature Images', 'sanbox' ),
				'default'  => array(
                    'url'=>get_template_directory_uri().'/assets/img/illustrations/i3.png'
                ),
			),

            array(
				'id'       => 'feature_sliders',
				'type'     => 'slides',
				'title'    => esc_html__( 'Client services', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your mini title here', 'sanbox' ),
				
			),
			
			
			
		),
	)
);
