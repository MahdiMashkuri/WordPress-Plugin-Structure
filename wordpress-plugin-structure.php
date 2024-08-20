<?php
/*
Plugin Name:  Wordpress plugin structure
Plugin URI: https://Weblan3er.com/
Description: Wordpress plugin structure is a complete starter kit for developing WordPress plugins. This template includes an organized structure that helps you build scalable and maintainable plugins. The features of this kit include managing custom post types, support for scheduling tasks (Cron Jobs), integration with REST API, and translation capabilities. Suitable for developers looking to quickly and regularly start plugin writing projects.
Version: 1.0
Author: Mahdi Mashkuri
Author URI: https://Weblan3er.com/
Text Domain: wordpress-plugin-structure
Domain Path: /languages
*/

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Load the text domain for translation
function wordpress_plugin_structure_load_textdomain() {
    load_plugin_textdomain( 'wordpress-plugin-structure', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'wordpress_plugin_structure_load_textdomain' );

// Include necessary files
require_once plugin_dir_path( __FILE__ ) . 'includes/admin/class-admin.php';

// Initialize the plugin
function wordpress_plugin_structure_init() {
    // Load the admin management classes
    $admin = new wordpress_plugin_structure_Admin();
    $admin->init();
}

add_action( 'plugins_loaded', 'wordpress_plugin_structure_init' );

?>