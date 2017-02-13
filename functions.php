<?php

function wp_spirit8_scripts() {
    /* get css */
    wp_enqueue_style( 'bootsrap-css', get_template_directory_uri() . '/css/bootstrap.css', array() );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', array() );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', array() );
    wp_enqueue_style( 'owl-themes', get_template_directory_uri() . '/css/owl.theme.css', array() );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css', array() );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array() );

    /* get js */

    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.1.11.1.js', array(), '', true );
    wp_enqueue_script( 'bootsrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '', true );
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/SmoothScroll.js', '', array(), true );
    wp_enqueue_script( 'isotop', get_template_directory_uri() . '/js/jquery.isotope.js', '', array(), true );
    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/owl.carousel.js', '', array(), true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_spirit8_scripts' );



function cptui_register_my_cpts_service() {

    /**
     * Post Type: services.
     */

    $labels = array(
        "name" => __( 'services', '' ),
        "singular_name" => __( 'service', '' ),
    );

    $args = array(
        "label" => __( 'services', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "service", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "service", $args );
}

add_action( 'init', 'cptui_register_my_cpts_service' );

function cptui_register_my_cpts_team() {

    /**
     * Post Type: Teams.
     */

    $labels = array(
        "name" => __( 'Teams', '' ),
        "singular_name" => __( 'team', '' ),
    );

    $args = array(
        "label" => __( 'Teams', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "team", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "team", $args );
}

add_action( 'init', 'cptui_register_my_cpts_team' );



function cptui_register_my_cpts_client() {

    /**
     * Post Type: Client.
     */

    $labels = array(
        "name" => __( 'Client', '' ),
        "singular_name" => __( 'Client', '' ),
    );

    $args = array(
        "label" => __( 'Client', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "client", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "client", $args );
}

add_action( 'init', 'cptui_register_my_cpts_client' );

function cptui_register_my_cpts_portfolio() {

    /**
     * Post Type: Portfolio.
     */

    $labels = array(
        "name" => __( 'Portfolio', '' ),
        "singular_name" => __( 'portfolio', '' ),
    );

    $args = array(
        "label" => __( 'Portfolio', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "portfolio", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portfolio' );

function cptui_register_my_cpts_testimoni() {

    /**
     * Post Type: Testimoni.
     */

    $labels = array(
        "name" => __( 'Testimoni', '' ),
        "singular_name" => __( 'Testimoni', '' ),
    );

    $args = array(
        "label" => __( 'Testimoni', '' ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "testimoni", "with_front" => true ),
        "query_var" => true,
        "supports" => array( "title", "editor", "thumbnail" ),
    );

    register_post_type( "testimoni", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimoni' );




function meta_service( $meta_boxes_service ) {
    $meta_boxes_service[] = array(
        'title'      => __( 'Thumbnail Service', 'textdomain' ),
        'post_types' => 'service',
        'fields'     => array(
            array(
                'id'   => 'thumbnail',
                'name' => __( 'Thumbnail Icon', 'textdomain' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes_service;
}

add_filter( 'rwmb_meta_boxes', 'meta_service' );


function meta_team( $meta_boxes_team) {
    $meta_boxes_team[] = array(
        'title'      => __( 'Position Office', 'textdomain' ),
        'post_types' => 'team',
        'fields'     => array(
            array(
                'id'   => 'position',
                'name' => __( 'Position Office', 'textdomain' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes_team;

}

function meta_portfolio( $meta_boxes_portfolio) {
    $meta_boxes_portfolio[] = array(
        'title'      => __( 'Portfolio', 'textdomain' ),
        'post_types' => 'portfolio',
        'fields'     => array(
            array(
                'id'      => 'type_1',
                'name'    => __( 'Type Portfolio 1', 'textdomain' ),
                'type'    => 'select',
                'options' => array(
                    'branding' => __( 'branding', 'textdomain' ),
                    'photography' => __( 'photography', 'textdomain' ),
                    'app' => __( 'app', 'textdomain' ),
                    'web' => __( 'web', 'textdomain' ),
                ),
            ),
            array(
                'id'      => 'type_2',
                'name'    => __( 'Type Portfolio 2', 'textdomain' ),
                'type'    => 'select',
                'options' => array(
                    'branding' => __( 'branding', 'textdomain' ),
                    'photography' => __( 'photography', 'textdomain' ),
                    'app' => __( 'app', 'textdomain' ),
                    'web' => __( 'web', 'textdomain' ),
                ),
            ),
        ),
    );
    return $meta_boxes_portfolio;

}

add_filter( 'rwmb_meta_boxes', 'meta_portfolio' );


function meta_testimoni( $meta_boxes_testimoni) {
    $meta_boxes_testimoni[] = array(
        'title'      => __( 'Testimoni', 'textdomain' ),
        'post_types' => 'testimoni',
        'fields'     => array(
            array(
                'id'      => 'author',
                'name'    => __( 'Author', 'textdomain' ),
                'type'    => 'text',
            ),
            array(
                'id'      => 'office',
                'name'    => __( 'Office', 'textdomain' ),
                'type'    => 'text',
            ),
        ),
    );
    return $meta_boxes_testimoni;

}

add_filter( 'rwmb_meta_boxes', 'meta_testimoni' );


add_theme_support( 'post-thumbnails');
set_post_thumbnail_size( 800, 800, true );