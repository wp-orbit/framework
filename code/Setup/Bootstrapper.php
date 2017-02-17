<?php
namespace WPOrbit\Setup;

/**
 * Bootstrap WP Orbit component classes.
 *
 * Class Bootstrapper
 *
 * @package WPOrbit\Setup
 */
class Bootstrapper
{
    /**
     * @var array
     */
    protected $bootStrappers = [
        '\WPOrbit\Ajax\Setup\Bootstrapper',
        '\WPOrbit\MetaBoxes\Setup\Bootstrapper'
    ];

    /**
     * Bootstrapper constructor.
     */
    public function __construct()
    {
        // Loop through defined bootstrap classes.
        foreach( $this->bootStrappers as $className )
        {
            // Instantiate the class if it exists.
            if ( class_exists( $className ) )
            {
                new $className;
            }
        }
    }
}