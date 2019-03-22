<?php
/**
 * Plugin Name: Downloads Plugin
 * Description: A Download plugin made for Rijnland Instituut
 * Version: 1.0
 * Author: Adinda Knevel, Rowan Nijland
 * Author URI: http://www.mywebsite.com
 */

function register_downloads() {
 
    $labels = array(
        'name' => _x( 'Downloads', 'download' ),
        'singular_name' => _x( 'Download', 'download' ),
        'add_new' => _x( 'Nieuwe download toevoegen', 'download' ),
        'add_new_item' => _x( 'Add New Download', 'download' ),
        'edit_item' => _x( 'Edit Download', 'download' ),
        'new_item' => _x( 'New Download', 'download' ),
        'view_item' => _x( 'View Downloads', 'download' ),
        'search_items' => _x( 'Search Downloads', 'download' ),
        'not_found' => _x( 'No download found', 'download' ),
        'not_found_in_trash' => _x( 'No downloads found in Trash', 'download' ),
        'parent_item_colon' => _x( 'Parent Download:', 'download' ),
        'menu_name' => _x( 'Downloads', 'download' ),
    );
 
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Downloads',
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-external',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
 
    register_post_type( 'download', $args );
}
 
add_action( 'init', 'register_downloads' );


?>