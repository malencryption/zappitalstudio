<?php 

function leesa_scripts() {
    // wp_enqueue_style( 'leesa-style', get_stylesheet_uri() );
    // wp_enqueue_style( 'leesa-clean', get_template_directory_uri() . '/css/clean-blog.min.css' );
    wp_enqueue_style( 'leesa-bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" );
    wp_enqueue_style( 'leesa-icomoon', get_template_directory_uri() . '/public/css/icomoon.css' );
    wp_enqueue_style( 'leesa-base', get_template_directory_uri() . '/public/css/base.css' );

    // wp_enqueue_style( 'leesa-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    // wp_enqueue_style( 'leesa-fontawesome', get_template_directory_uri() . '/css/fa-all.min.css' );
	wp_enqueue_style( 'leesa-font1', "https://fonts.googleapis.com/css?family=Fjalla+One|Noto+Sans:400,400i,700" );
    
    // wp_enqueue_style( 'leesa-font1', "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" );
    // wp_enqueue_style( 'leesa-font2', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" );
    
    wp_enqueue_style( 'leesa-font2', "https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i|Source+Sans+Pro:300,300i,400,400i,700,700i" );

    wp_enqueue_script( 'leesa-jq', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
    wp_enqueue_script( 'leesa-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js");
    wp_enqueue_script( 'leesa-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js");

    // wp_enqueue_script( 'leesa-jq', get_template_directory_uri() . '/js/jquery.min.js');
    // wp_enqueue_script( 'leesa-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script( 'leesa-clean', get_template_directory_uri() . '/js/clean-blog.min.js');
}    

add_action( 'wp_enqueue_scripts', 'leesa_scripts' );

function add_menu_link_class( $atts, $item, $args ) {
    if($args->link_class) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_list_item_class($classes, $item, $args) {
    if($args->list_item_class) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

register_nav_menus( array(
    'main-menu' => 'Main Menu',
    'footer-menu' => 'Footer Menu',
) );
?>