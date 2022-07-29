<?php
 
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/CMB2/init.php';


add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$sab_team = new_cmb2_box( array(
		'id'            => 'san_team',
		'title'         => __( 'Team Field', 'cmb2' ),
		'object_types'  => 'san_team', 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		
	) );

	// TEAM ROLE field
	$sab_team->add_field( array(
		'name'       => __( 'Team Member Role', 'san' ),
		'desc'       => __( 'This fields for team member postion', 'san' ),
		'id'         => 'san_team_role',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

	// FACEBOOK LINK  field
	$sab_team->add_field( array(
		'name' => __( 'Facebook URL', 'san' ),
		'desc' => __( 'Input your facebook link (optional)', 'san' ),
		'id'   => 'san_tean_facebook',
		'type' => 'text_url',
		
	) );

	// TWITTER LINK  field
	$sab_team->add_field( array(
		'name' => __( 'Twitter URL', 'san' ),
		'desc' => __( 'Put your twitter link here (optional)', 'san' ),
		'id'   => 'san_team_twitter',
		'type' => 'text_url',
	) );

	// LINKDIN LINK  field
	$sab_team->add_field( array(
		'name' => __( 'Linkdin URL', 'san' ),
		'desc' => __( 'Put your Linkdin link here (optional)', 'san' ),
		'id'   => 'san_team_linkdin',
		'type' => 'text_url',
	) );

}




//Price metabox

add_action( 'cmb2_admin_init', 'san_price_metabox' );
/**
 * Define the metabox and field configurations.
 */
function san_price_metabox() {

	/**
	 * Initiate the metabox
	 */
	$sab_price = new_cmb2_box( array(
		'id'            => 'san_price',
		'title'         => __( 'Price Field', 'cmb2' ),
		'object_types'  => 'san_price', 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
		
	) );

	// Price package fields
	$sab_price->add_field( array(
		'name'       => __( 'Package Price', 'san' ),
		'desc'       => __( 'This fields for Package Price', 'san' ),
		'id'         => 'san_team_price',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

	// Price package year fields
	$sab_price->add_field( array(
		'name'       => __( 'Package Price Yearly', 'san' ),
		'desc'       => __( 'This fields for Package Price', 'san' ),
		'id'         => 'san_team_price_year',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

	// Price project fields
	$sab_price->add_field( array(
		'name' => __( 'Number Of Project', 'san' ),
		'desc' => __( 'How  many project you do offer (optional)', 'san' ),
		'id'   => 'san_price_num_project',
		'type' => 'text',
		
	) );

	// Price api fields
	$sab_price->add_field( array(
		'name' => __( 'Number Of API', 'san' ),
		'desc' => __( 'How  many API you do offer (optional)', 'san' ),
		'id'   => 'san_price_num_api',
		'type' => 'text',
		
	) );

	// Price MB fields
	$sab_price->add_field( array(
		'name' => __( 'Number Of MB', 'san' ),
		'desc' => __( 'How  many MB, you do offer (optional)', 'san' ),
		'id'   => 'san_price_num_mb',
		'type' => 'text',
		
	) );

	// Price supports fields
	$sab_price->add_field( array(
		'name' => __( 'Supports Time', 'san' ),
		'desc' => __( 'How  many time give you customare suppotr(optional)', 'san' ),
		'id'   => 'san_price_num_supports',
		'type' => 'text',
		
	) );

	

	

}














?>