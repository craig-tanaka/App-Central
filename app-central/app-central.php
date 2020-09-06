<?php
/**
* @package AppCentral
*/
/*
Plugin Name: App Central
Plugin URI: 
Description: This plugin creates a workflow that allows users to register and sign in to your website, in a way you can easily customize.
Version: aplha1.0.0
Author: Craig Tanaka Mudzingwa
Author URI: http://craigtanaka.web.app
Text Domain: app-central
*/


// Todo: check for register pages on init
// Todo: check for errors on page activation and deactivation and upgrades
// Todo: add subfolders index.php's

function create_pages(){
    // Create register page
    wp_insert_post( array(
        'post_title'     => 'Register',
        'post_name'      => 'ap-register',
        'post_status'    => 'publish',
        'post_author'    => $user_id, // or "1" (super-admin?)
        'post_type'      => 'page',
        'menu_order'     => 1,
        'comment_status' => 'closed',
        'ping_status'    => 'closed',
        'page_template'  => 'template-register.php'
    ));
    // Create signin page
    wp_insert_post( array(
        'post_title'     => 'Sign In',
        'post_name'      => 'ap-signin',
        'post_status'    => 'publish',
        'post_author'    => $user_id, // or "1" (super-admin?)
        'post_type'      => 'page',
        'menu_order'     => 1,
        'comment_status' => 'closed',
        'ping_status'    => 'closed',
        'page_template'  => 'template-signin.php'
    ));
    // Create create-user page
    wp_insert_post( array(
        'post_title'     => 'App Central - Create User',
        'post_name'      => 'ap-signin',
        'post_status'    => 'publish',
        'post_author'    => $user_id, // or "1" (super-admin?)
        'post_type'      => 'page',
        'menu_order'     => 1,
        'comment_status' => 'closed',
        'ping_status'    => 'closed',
        'page_template'  => 'template-signin.php'
    ));
}
register_activation_hook(__FILE__, 'create_pages');


// Ensures plugin pages are displayed with the plugin templates
function add_page_template($template){
    if(is_page( 'ap-register' )){
        $template = plugin_dir_path(__FILE__) . 'templates/template-register.php';
    }
    if(is_page( 'ap-signin' )){
        $template = plugin_dir_path(__FILE__) . 'templates/template-signin.php';
    }
    return $template;
}
add_filter( 'template_include', 'add_page_template', 99 );


// Move plugin pages to trash on plugin deactivation
function move_pages_to_trash(){
    $post = get_page_by_path('ap-register');
    wp_delete_post($post->ID, true);
    $post = get_page_by_path('ap-signin');
    wp_delete_post($post->ID, true);
}
register_deactivation_hook( __FILE__, 'move_pages_to_trash' );
