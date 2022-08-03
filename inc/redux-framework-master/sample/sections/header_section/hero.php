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
		'title'            => esc_html__( 'Hero Section', 'sanbox' ),
		'id'               => 'Hero',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'hero_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Hero Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input title here', 'sanbox' ),
				'default'  => 'Creative. Smart. Awesome. azim'
			),
            array(
				'id'       => 'hero_subtitle',
				'type'     => 'editor',
				'title'    => esc_html__( 'Hero Sub Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input sub-title here', 'sanbox' ),
				'default'  => 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things azim'
			),
            array(
				'id'       => 'hero_btn_one',
				'type'     => 'text',
				'title'    => esc_html__( 'Hero Button one', 'sanbox' ),
				'subtitle' => esc_html__( 'Input button name', 'sanbox' ),
				'default'  => 'see azim'
			),
            array(
				'id'       => 'hero_btn_one_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Hero Button URL', 'sanbox' ),
				'subtitle' => esc_html__( 'Input button link', 'sanbox' ),
				'default'  => '#'
			),
            array(
				'id'       => 'hero_btn_two',
				'type'     => 'text',
				'title'    => esc_html__( 'Hero Button Two', 'sanbox' ),
				'subtitle' => esc_html__( 'Input button name', 'sanbox' ),
				'default'  => 'Learn azim'
			),
            array(
				'id'       => 'hero_btn_two_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Hero Button URL', 'sanbox' ),
				'subtitle' => esc_html__( 'Input button link', 'sanbox' ),
				'default'  => '#'
			),

            array(
				'id'       => 'hero_img',
				'type'     => 'media',
                'url'      =>true,
				'title'    => esc_html__( 'Hero images', 'sanbox' ),
				'subtitle' => esc_html__( 'Upload your images', 'sanbox' ),
				'default'  => array(
                    'url'  => get_template_directory_uri(  ).'assets/img/illustrations/i6..png',
                )
			),
            
			
			
			
		),
	)
);
