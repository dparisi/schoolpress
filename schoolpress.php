<?php
/*
* Plugin Name: SchoolPress
* Plugin URI: 
* Description: Schoolpress tutorial plugin
* Author: davide
* Version: 1.0.0
* Author URI:
* License: GPLv2 or later
*/

/**
 *  Initialize plugin
 */
function sp_plugin_init()
{
    $slug = plugin_basename(__FILE__);

}

/**
 *  Create schoolpress admin menu
 */
/*function sp_admin_menu() {
    add_menu_page(
        'SchoolPress',
        'SchoolPress',
        'manage_options',
        'sp_admin',
        'sp_admin_page'
    );
}*/

/**
 *
 */
function sp_admin_settings()
{
    add_options_page(
        'SchoolPress',
        'SchoolPress',
        'manage_options',
        'sp_admin',
        'sp_admin_settings_page'
    );
}


/**
 *  Render admin page
 */
/*function sp_admin_page() {
    require_once dirname( __FILE__ ) . '/adminpages/admin.php';
}*/

/**
 *
 */
function sp_admin_settings_page()
{
    $request_method = $_SERVER["REQUEST_METHOD"];
    switch ($request_method) {
        case 'POST':
            print_settings_handler();
            break;
        case 'GET':
            print_admin_settings();
            break;
    }

}

/**
 *
 */
function print_settings_handler()
{
    require_once dirname(__FILE__) . '/adminpages/settings-handler.php';
}

/**
 *
 */
function print_admin_settings()
{
    require_once dirname(__FILE__) . '/adminpages/settings.php';
}


//add_action( 'admin_menu', 'sp_admin_menu' );
add_action('init', 'sp_plugin_init');
add_action('admin_menu', 'sp_admin_settings');