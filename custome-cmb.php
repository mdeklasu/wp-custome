<?php


add_action( 'cmb2_admin_init', 'custome_field_func' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function custome_field_func() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'coryright',
		'title'         =>'Custome Metabox',
		'object_types'  => array('post'), // Post type
		
	) );

	$cmb->add_field( array(
		'id'   =>'footer',
		'name' =>'Copy Right',
		'type' =>'text',
	
	) );

	$cmb->add_field( array(
		'id'   =>'aurhor',
		'name' =>'author name',
		'type' =>'text',
	
	) );

}



