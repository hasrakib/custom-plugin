<?php

// Hook to add the custom menu
add_action('admin_menu', 'custom_admin_menu');

// Function to create the custom menu
function custom_admin_menu() {
    // Add top-level menu
    add_menu_page(
        'Custom Menu',          // Page title
        'Custom Menu',          // Menu title
        'read',       // Capability
        'custom-menu',          // Menu slug
        False, // Callback function to display the menu page
        'dashicons-admin-site',   // Icon URL or Dashicon class
    );

    // Add submenu
    add_submenu_page(
        'custom-menu',          // Parent menu slug
        'Custom Submenu',       // Page title
        'Custom Submenu',       // Menu title
        'manage_options',       // Capability
        'custom-menu',       // Menu slug
        'custom_submenu_display' // Callback function to display the submenu page
    );

    // Add another submenu
    add_submenu_page(
        'custom-menu',          // Parent menu slug
        'Another Submenu',       // Page title
        'Another Submenu',       // Menu title
        'manage_options',       // Capability
        'another-submenu',       // Menu slug
        'another_submenu_display' // Callback function to display the submenu page
    );
}

// Function to display the custom submenu page
function custom_submenu_display() {
    require_once plugin_dir_path( __FILE__ ). 'custom-submenu.php';
}

// Function to display the another submenu page
function another_submenu_display() {
    require_once plugin_dir_path( __FILE__ ). 'another-submenu.php';
}