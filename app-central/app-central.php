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

function create_pages(){
    
    // Create register page
    wp_insert_post( array(
        'post_title'     => 'Register',
        'post_name'      => 'Register',
        'post_content'   => 'This is the plugin register page',
        'post_status'    => 'publish',
        'post_author'    => $user_id, // or "1" (super-admin?)
        'post_type'      => 'page',
        'menu_order'     => 1,
        'comment_status' => 'closed',
        'ping_status'    => 'closed'
    ));
}
register_activation_hook(__FILE__, 'create_pages');