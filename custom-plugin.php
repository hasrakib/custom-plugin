<?php

/*
 * Plugin Name:       My Custom Plugin
 * Plugin URI:        https://rakibulhasan.me/my-custom-plugin/
 * Description:       Not Sure What This Plugin Will Be... Yet!
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rakibul Hasan
 * Author URI:        https://rakibulhasan.me
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://rakibulhasan.me/my-custom-plugin/updates
 * Text Domain:       my-custom-plugin
 * Domain Path:       /languages
 */

 // If this file is called directly, abort.
 if (! defined( 'WPINC' ) ) {
    echo 'No script kiddies please!';
    die;
 }

 // Hook to add the custom menu
add_action('admin_menu', 'custom_admin_menu');

// Function to create the custom menu
function custom_admin_menu() {
    add_menu_page(
        'Custom Menu',          // Page title
        'Custom Menu',          // Menu title
        'manage_options',       // Capability
        'custom-menu',          // Menu slug
        'custom_menu_contents',  // Callback function to display the menu page
        'dashicons-welcome-learn-more' // Icon URL or Dashicon class
    );
}

// Callback function to display the menu page
function custom_menu_contents() {
    ?>
    <div class="custom-menu-content">
        <h1>Custom Menu</h1>
        <p>This is your custom menu page content.</p>
    </div>
    <?php
}