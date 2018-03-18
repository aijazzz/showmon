<?php
/*
 * Plugin Name: signage
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: signage
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-signage.php' );
require_once( 'includes/class-signage-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-signage-admin-api.php' );
require_once( 'includes/lib/class-signage-post-type.php' );
require_once( 'includes/lib/class-signage-taxonomy.php' );

/**
 * Returns the main instance of signage to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object signage
 */
function signage () {
	$instance = signage::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = signage_Settings::instance( $instance );
	}

	return $instance;
}

signage();