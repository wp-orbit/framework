<?php
namespace Zawntech\WordPress\WPOrbit;

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
}

