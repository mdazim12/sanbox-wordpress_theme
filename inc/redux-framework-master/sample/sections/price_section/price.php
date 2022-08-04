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
		'title'            => esc_html__( 'Price Section', 'sanbox' ),
		'id'               => 'price_s',
		'subsection'       => true,
		'customizer_width' => '450px',
		'fields'           => array(
			array(
				'id'       => 'price_title',
				'type'     => 'text',
				'title'    => esc_html__( 'Price Title', 'sanbox' ),
				'subtitle' => esc_html__( 'Input your title here', 'sanbox' ),
				'default'  => 'Price section'
			),

            array(
				'id'       => 'price_month',
				'type'     => 'text',
				'title'    => esc_html__( 'Price month labels', 'sanbox' ),
				'subtitle' => esc_html__( 'Input price month labels', 'sanbox' ),
                'default'  => 'Monthly'
				
			),
            array(
				'id'       => 'price_year',
				'type'     => 'text',
				'title'    => esc_html__( 'Price Yealry labels', 'sanbox' ),
                'default'  => 'Yearly'
				
			),
            array(
				'id'       => 'pricet_year_save',
				'type'     => 'text',
				'title'    => esc_html__( 'How much save yearly', 'sanbox' ),
                'default'  => '30%'
				
			),
            array(
				'id'       => 'pricet_pack_order',
				'type'     => 'text',
				'title'    => esc_html__( 'Price pack choose label', 'sanbox' ),
                'default'  => 'order'
				
			),
            
        
			
			
			
		),
	)
);
