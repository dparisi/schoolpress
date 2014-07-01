<?php
/*
* Plugin Name: My Plugin
* Plugin URI: 
* Description: simple plugin
* Author: davide
* Version: 1.0.0
* Author URI:
* License: GPLv2 or later
*/

function my_plugin_wp_footer()
{
    echo 'Hello World';
}

add_action('wp_footer', 'my_plugin_wp_footer');