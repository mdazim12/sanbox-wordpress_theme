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
		'title'            => esc_html__( 'Project Section', 'sanbox' ),
		'id'               => 'project_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'project_mini_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Project Mini Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your mini title here', 'sanbox' ),
				'default'  => 'OUR PROJECTS'
			),

            array(
				'id'       => 'project_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Project Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
                'default'  => 'Check out some'
				
			),
            array(
				'id'       => 'project_btn',
				'type'     => 'text',
				'title'    => esc_html__( 'Project Button', 'sanbox' ),
                'default'  => 'Button'
				
			),
            array(
				'id'       => 'project_btn_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Project Button Link', 'sanbox' ),
                'default'  => '#'
				
			),
            
        
			
			
			
		),
	)
);
