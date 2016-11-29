<?php
/*
Plugin Name: WP Orbit Framework
Plugin URI: http://zawntech.com
Description:
Author: Marty Eason
Version: 0.0.1
Author URI: http://zawntech.com
*/

/** Absolute path to WP Orbit plugin directory. */
define( 'WP_ORBIT_PATH', __DIR__ );

/** Public URL to WP Orbit plugin. */
define( 'WP_ORBIT_URL', plugin_dir_url( __FILE__ ) );

// Verify that composer assets are installed.
if ( ! is_file( __DIR__ . '/vendor/autoload.php' ) ) {
    throw new \Exception('WP Orbit composer assets have not been installed');
}

// Initialize plugin.
Zawntech\WordPress\WPOrbit\WPOrbit::initialize();