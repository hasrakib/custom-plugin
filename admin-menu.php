<?php

// Hook to add the custom menu
add_action('admin_menu', 'custom_admin_menu');

// Function to create the custom menu
function custom_admin_menu() {
    // Add top-level menu
    add_menu_page(
        'Custom Menu',          // Page title
        'Custom Menu',          // Menu title
        'manage_options',       // Capability
        'custom-menu',          // Menu slug
        'custom_menu_display', // Callback function to display the menu page
        'dashicons-chart-bar'   // Icon URL or Dashicon class
    );

    // Add submenu
    add_submenu_page(
        'custom-menu',          // Parent menu slug
        'Custom Submenu',       // Page title
        'Custom Submenu',       // Menu title
        'manage_options',       // Capability
        'custom-submenu',       // Menu slug
        'custom_submenu_display' // Callback function to display the submenu page
    );
}

// Callback function to display the menu page
function custom_menu_display() {
    ?>
    <div class="wrap">
        <h2>Custom Menu</h2>
        <p>This is my custom menu page content.</p>
    </div>
    <?php
}

// Callback function to display the submenu page
function custom_submenu_display() {
    ?>
    <div class="wrap">
        <h2>Custom Submenu</h2>
        <p>This is my custom submenu page content.</p>
    </div>
    <?php
}