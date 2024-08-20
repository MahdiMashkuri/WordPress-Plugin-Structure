<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access
}

class wordpress_plugin_structure_Admin {

    public function __construct() {
        // Register admin menu
        add_action( 'admin_menu', array( $this, 'add_plugin_menu' ) );
    }

    public function init() {
        // Additional initialization functions can be added here if needed
    }

    public function add_plugin_menu() {
        add_menu_page(
            __( 'Wordpress plugin structure', 'wordpress-plugin-structure' ),  // Page title
            __( 'Wordpress plugin structure', 'wordpress-plugin-structure' ),  // Menu title
            'manage_options',   // Capability required to view the menu
            'wordpress-plugin-structure',  // Menu slug
            array( $this, 'display_plugin_admin_page' ),  // Function to display the admin page
            'dashicons-admin-plugins',  // Menu icon
            6  // Menu position
        );
    }

    public function display_plugin_admin_page() {
        ?>
        <div class="wrap">
            <h1><?php _e( 'Welcome to the wordpress plugin structure', 'wordpress-plugin-structure' ); ?></h1>
            <p><?php _e( 'This is the management page for the wordpress plugin structure.', 'wordpress-plugin-structure' ); ?></p>
        </div>
        <?php
    }
}

?>