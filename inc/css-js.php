<?php
add_action('init', 'bcls_register_script');
function bcls_register_script() {
    wp_register_script( 'custom_jquery', plugins_url('/owl/owl.carousel.js', __FILE__), array('jquery'), '2.5.1' );
    wp_register_script( 'custom_jquery1', plugins_url('/owl/owl-main.js', __FILE__), array('jquery'), '2.5.2' );
   
    

    wp_register_style( 'new_style', plugins_url('/owl/owl.carousel.css', __FILE__), false, '1.1.0', 'all');
    wp_register_style( 'new_style3', plugins_url('/owl/client.css', __FILE__), false, '1.5.0', 'all');
    wp_register_style( 'new_style1', plugins_url('/owl/owl.theme.css', __FILE__), false, '1.2.0', 'all');
    wp_register_style( 'new_style2', plugins_url('/owl/owl.transitions.css', __FILE__), false, '1.3.0', 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'bcls_enqueue_style');

function bcls_enqueue_style(){
   wp_enqueue_script('custom_jquery');
   wp_enqueue_script('custom_jquery1');

   wp_enqueue_style( 'new_style' );
     wp_enqueue_style( 'new_style3' );
   wp_enqueue_style( 'new_style1' );
   wp_enqueue_style( 'new_style2' );
  

}
?>