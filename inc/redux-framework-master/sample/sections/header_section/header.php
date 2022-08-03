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
		'title'            => esc_html__( 'Logo', 'sanbox' ),
		'id'               => 'Header_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'header_logo',
				'type'     => 'media',
                'url'      => true,
				'title'    => esc_html__( 'logo', 'sanbox' ),
				'subtitle' => esc_html__( 'Upload your website logo', 'your-textdomain-here' ),
				'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),
			),
			
			
			
		),
	)
);
