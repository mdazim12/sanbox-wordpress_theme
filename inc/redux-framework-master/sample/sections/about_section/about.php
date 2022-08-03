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
		'title'            => esc_html__( 'About Section', 'sanbox' ),
		'id'               => 'about_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'ab_mini_title',
				'type'     => 'text',
				'title'    => esc_html__( 'About mini Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input mini title', 'sanbox' ),
				'default'  => 'This is defult mini title',
			),
            array(
				'id'       => 'ab_title',
				'type'     => 'text',
				'title'    => esc_html__( 'About Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input title', 'sanbox' ),
				'default'  => 'This is defult  title',
			),
            array(
				'id'       => 'ab_des',
				'type'     => 'editor',
				'title'    => esc_html__( 'About Description', 'sanbox' ),
				'subtitle' => esc_html__( 'Input desceiptioon in deatis', 'sanbox' ),
				'default'  => 'This is defult  title',
			),
            array(
				'id'       => 'ab_client',
				'type'     => 'text',
				'title'    => esc_html__( 'Number of Clients', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your clients number', 'sanbox' ),
				'default'  => '100',
			),
            array(
				'id'       => 'ab_client_icon',
				'type'     => 'media',
				'title'    => esc_html__( 'Number of Clients icon', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your clients number icon', 'sanbox' ),
				'default'  => array(
                    'url'  => get_template_directory_uri(  ).'assets/img/icons/solid/cloud-group.svg',
                ),
			),
            array(
				'id'       => 'ab_time',
				'type'     => 'text',
				'title'    => esc_html__( 'Save Time', 'sanbox' ),
				'subtitle' => esc_html__( 'How many time you could save', 'sanbox' ),
				'default'  => '50',
			),
			
			
			
		),
	)
);
