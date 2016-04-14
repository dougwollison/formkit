<?php
/**
 * The FormKit Autoloader
 *
 * @package FormKit
 */

/**
 * Find and load the php file for the appropriate class.
 *
 * @since 1.0.0
 *
 * @param string $name The name of the class being called.
 */
function formkit_autoloader( $name ) {
	// Replace backslashes with hyphens for filename
	$file = strtolower( trim( str_replace( '\\', '-', $class ), '-' ) );

	// If the file exists, load it
	$path = __DIR__ . '/class-' . $file . '.php';
	if ( file_exists( $path ) ) {
		require( $path );
	}
}

// Register the autoloader
spl_autoload_register( 'formkit_autoloader' );