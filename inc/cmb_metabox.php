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














?>