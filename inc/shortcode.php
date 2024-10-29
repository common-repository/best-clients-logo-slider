<?php
function bcls_client_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'count' => '',
        'column' => '',
        'row' => '',
        'border' => '',
        'bcolor' => '',
        'p_id' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'client','order' => 'DES',)
        );      
$post_id = $p_id;
    $list = '<div style="width:100%" class="client-post-list row_'.$row.' column-'.$column.'">';
    while($q->have_posts()) : $q->the_post();  $q->get_post($post_id);
        $idd = get_the_ID();
        $c_logo = get_post_meta( get_the_ID(), 'clientmeta_thumbnail_image', true );
        $c_url = get_post_meta( get_the_ID(), 'clientmeta_client_url', true );
        $post_content = get_the_content();
    
        $list .= '
        <li class="single-post-item " style="width:19%;display:block;margin:10px 10px auto; padding:3%;float:left;border:'.$border.' solid '.$bcolor.';list-style:none">
            <a href="#" ><img src="'.$c_logo.'" alt=""></a>
        </li>
        ';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
} 


add_shortcode('client', 'bcls_client_shortcode');



function bcls_client_owl_shortcode( $atts, $content = null  ) {

    extract( shortcode_atts( array(
        'count' => '',
        'column' => '',
        'border' => '',
        'bcolor' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'client','order' => 'DES')
        );      

    $list = '<div style="width:100%" id="owl-demo" class="client-post-list column-'.$column.'">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $c_logo = get_post_meta( get_the_ID(), 'clientmeta_thumbnail_image', true );
        $c_url = get_post_meta( get_the_ID(), 'clientmeta_client_url', true );
        $post_content = get_the_content();
    
        $list .= '
        <div class="item single-post-item" style="padding: 8%;">
            <img src="'.$c_logo.'" alt="">
        </div>
        ';        
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}   
add_shortcode('client_owl', 'bcls_client_owl_shortcode');
?>