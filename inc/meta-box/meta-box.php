<?php 
if ( file_exists( dirname( __FILE__ ) . '/lib/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/lib/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/lib/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/lib/init.php';
}
add_action( 'cmb2_admin_init', 'bcls_client_metabox' );

 function bcls_client_metabox() {
	$prefix = 'clientmeta_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */

	$bcls_client_metabox = new_cmb2_box( array(
		'id'            => $prefix . 'client-metabox',
		'title'         => __( 'Client details', 'cmb2' ),
		'object_types'  => array( 'client', ), 
	) );
     
     
     
     $bcls_client_metabox->add_field( array(
    'name'    => 'Client Name',
    'desc'    => 'Put client name here',
    'default' => '',
    'id'      => $prefix . 'client_name',
    'type'    => 'text',
) );

	$bcls_client_metabox->add_field( array(
		'name' => __( 'Client logo', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'thumbnail_image',
		'type' => 'file',
	) );
$bcls_client_metabox->add_field( array(
    'name'    => 'Client Url',
    'desc'    => 'Put the URl here',
    'default' => '',
    'id'      => $prefix . 'client_url',
    'type'    => 'text',
) );
     
     $bcls_client_metabox->add_field( array(
    'name'    => 'Client email',
    'desc'    => 'Put the email URl here',
    'default' => '',
    'id'      => $prefix . 'client_email',
    'type'    => 'text',
) );
          
}
?>