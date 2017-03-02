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

        // Enqueue scripts and styles.
        $this->enqueueScripts();

        // Initialize WP Orbit Bootstrapper.
        new Setup\Bootstrapper;
    }

    /**
     * When testing m
     */
    protected function enableTestingMode()
    {
        // Load component testing files.
        require_once __DIR__ . '/../../wp-orbit-components/tests/test-dependencies.php';
    }

    /**
     * Register/enqueue scripts and styles.
     */
    protected function enqueueScripts()
    {
        // Hook backend scripts and styles.
        add_action( 'admin_enqueue_scripts', function()
        {
            // Path to assets.
            $assetsPath = WP_ORBIT_URL . 'assets/';

            // Compiled WP Orbit Plugin CSS and JS.
            wp_register_style( 'wp-orbit-framework', $assetsPath . '/css/wp-orbit.css' );
            wp_register_script( 'wp-orbit-framework', $assetsPath . '/js/wp-orbit.js' );

            // Register libraries.
            wp_register_script( 'noty', $assetsPath . 'js/lib/jquery.noty.packaged.min.js', ['jquery'] );
            wp_register_script( 'knockout', $assetsPath . 'js/lib/knockout.js' );
            wp_register_script( 'knockout-mapping', $assetsPath . 'js/lib/knockout.mapping.js', ['knockout'] );
            wp_register_script( 'moment', $assetsPath . 'js/lib/moment-with-locales.min.js' );
            wp_register_script( 'validate', $assetsPath . 'js/lib/validate.min.js' );
            wp_register_script( 'bootstrap-datetimepicker', $assetsPath . 'js/lib/bootstrap-datetimepicker.min.js' );

            // Enqueue assets.
            wp_enqueue_style( 'wp-orbit-framework' );
            wp_enqueue_script( 'wp-orbit-framework' );
            wp_enqueue_script( 'noty' );
            wp_enqueue_script( 'knockout' );
            wp_enqueue_script( 'knockout-mapping' );
            wp_enqueue_script( 'moment' );
            wp_enqueue_script( 'validate' );
            wp_enqueue_script( 'underscore' );
            wp_enqueue_script( 'bootstrap-datetimepicker' );
        });
    }
}

