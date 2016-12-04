<?php
namespace WPOrbit;

/**
 * This is the main plugin wrapper class for WP Orbit.
 *
 * Class WPOrbit
 * @package Zawntech\WordPress\WPOrbit
 */
class WPOrbit
{
    /**
     * @var WPOrbit
     */
    protected static $instance;

    /**
     * @return WPOrbit
     */
    public static function getInstance()
    {
        if ( null === static::$instance ) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    /**
     * Alias of getInstance().
     * @return WPOrbit
     */
    public static function initialize()
    {
        return static::getInstance();
    }

    protected function __construct()
    {
        // Setup the plugin.
        $this->setUp();
    }

    /**
     * Set up the plugin.
     */
    protected function setUp()
    {
        // Check for the presence of the 'wp_orbit_testing' key.
        if ( isset( $_GET['wp_orbit_testing'] ) || isset( $_POST['wp_orbit_testing'] ) )
        {
            // Enable testing mode.
            $this->enableTestingMode();
        }
    }

    /**
     * When testing m
     */
    protected function enableTestingMode()
    {
        // Load component testing files.
        require_once __DIR__ . '/../../wp-orbit-components/tests/test-dependencies.php';
    }
}

