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
		'title'            => esc_html__( 'Team Section', 'sanbox' ),
		'id'               => 'team_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'team_mini_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Team Mini Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your mini title here', 'sanbox' ),
				'default'  => 'MEET THE TEAM azim'
			),

            array(
				'id'       => 'team_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Team Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
                'default'  => 'MEET THE TEAM azim'
				
			),
            array(
				'id'       => 'team_des',
				'type'     => 'editor',
				'title'    => esc_html__( 'Team Description', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your description here', 'sanbox' ),
                'default'  => 'MEET THE TEAM azim'
				
			),
            array(
				'id'       => 'team_btn',
				'type'     => 'text',
				'title'    => esc_html__( 'Team Button', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your button name', 'sanbox' ),
                'default'  => 'azim'
				
			),
            array(
				'id'       => 'team_btn_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Team Button URL', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your button URL here', 'sanbox' ),

				
			),
			
			
			
		),
	)
);
