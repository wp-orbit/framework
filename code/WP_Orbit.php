<?php
namespace Zawntech\WordPress\Orbit;

/**
 * This is the main plugin wrapper class for WP Orbit.
 *
 * Class WPOrbit
 * @package Zawntech\WordPress\WPOrbit
 */
class WP_Orbit
{
    /**
     * @var WP_Orbit
     */
    protected static $instance;

    /**
     * @return WP_Orbit
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
     * @return WP_Orbit
     */
    public static function initialize()
    {
        return static::getInstance();
    }
}

