<?php 

function leesa_scripts() {
    wp_enqueue_style( 'leesa-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" );
    wp_enqueue_style( 'leesa-icomoon', get_template_directory_uri() . '/public/css/icomoon.css' );
    wp_enqueue_style( 'leesa-main', get_template_directory_uri() . '/public/css/base.css' );

    // wp_enqueue_style( 'leesa-material-css', "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" );
    wp_enqueue_style( 'leesa-material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons" );

	// wp_enqueue_style( 'leesa-font1', "https://fonts.googleapis.com/css?family=Fjalla+One|Noto+Sans:400,400i,700" );    
    wp_enqueue_style( 'leesa-font2', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,700;1,300;1,400;1,700" );

    wp_enqueue_style( 'leesa-font3', "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800" );
    
    wp_enqueue_style( 'leesa-font4', "https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300" );

    wp_enqueue_script( 'leesa-material-js', "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js");
    wp_enqueue_script( 'leesa-jq', "https://code.jquery.com/jquery-3.4.1.slim.min.js");
    wp_enqueue_script( 'leesa-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js");
    wp_enqueue_script( 'leesa-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js");

    // wp_enqueue_script( 'leesa-clean', get_template_directory_uri() . '/js/clean-blog.min.js');
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
    'top-menu' => 'Top Menu',
    'main-menu' => 'Main Menu',
    'footer-menu' => 'Footer Menu',
) );

add_theme_support( 'post-thumbnails' );

function new_excerpt_more( $more ) {
	return '... <div class="readMoreLink">Read More >></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function ci_get_related_posts( $post_id, $related_count, $args = array() ) {
    $args = wp_parse_args( (array) $args, array(
        'orderby' => 'rand',
        'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
    ) );

    $related_args = array(
        'post_type'      => get_post_type( $post_id ),
        'posts_per_page' => $related_count,
        'post_status'    => 'publish',
        'post__not_in'   => array( $post_id ),
        'orderby'        => $args['orderby'],
        'tax_query'      => array()
    );

    $post       = get_post( $post_id );
    $taxonomies = get_object_taxonomies( $post, 'names' );

    foreach ( $taxonomies as $taxonomy ) {
        $terms = get_the_terms( $post_id, $taxonomy );
        if ( empty( $terms ) ) {
            continue;
        }
        $term_list                   = wp_list_pluck( $terms, 'slug' );
        $related_args['tax_query'][] = array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $term_list
        );
    }

    if ( count( $related_args['tax_query'] ) > 1 ) {
        $related_args['tax_query']['relation'] = 'OR';
    }

    if ( $args['return'] == 'query' ) {
        return new WP_Query( $related_args );
    } else {
        return $related_args;
    }
}

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category('<span class="separator">,</span>', '');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// Include better comments file
require_once get_parent_theme_file_path( '/functions/better-comments.php' );

?>