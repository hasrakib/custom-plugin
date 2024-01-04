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

 require_once plugin_dir_path( __FILE__ ). 'admin-menu.php';

 ?>