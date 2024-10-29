<?php
add_action( 'init', 'bcls_create_post_type' );
function bcls_create_post_type() {
  register_post_type( 'client',
    array(
      'labels' => array(
        'name' => __( 'Clients' ),
        'singular_name' => __( 'Client'),
        'add_new' => 'Add New Client',
        'edit_item' => 'Edit Clients',
        'add_new_item' => 'Add a new client'
      ),
      'public' => true,
      'has_archive' => true,
    'supports'           => array( 'title','custom-fields','category' )
    )
  );
}
?>