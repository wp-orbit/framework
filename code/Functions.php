<?php
/**
 * Global functions.
 */

if ( ! function_exists( 'view' ) )
{
    /**
     * Renders a blade template view.
     * @param $name
     * @param array $data
     * @return string
     */
    function view( $name, $data = [] ) {
        return \WPOrbit\Views\View::render( $name, $data );
    }
}