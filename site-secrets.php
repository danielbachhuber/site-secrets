<?php
/*
Plugin Name: Site Secrets
Version: 0.1-alpha
Description: Keep your WordPress site private.
Author: Daniel Bachhuber
Author URI: http://danielbachhuber.com
Plugin URI: http://insidethunderdome.com
Text Domain: site-secrets
Domain Path: /languages
*/

class Site_Secrets {

	private static $instance;

	public static function get_instance() {

		if ( ! isset( self::$instance ) ) {
			self::$instance = new Site_Secrets;
		}

		return self::$instance;
	}

}

/**
 * Load the plugin
 */
function Site_Secrets() {
	return Site_Secrets::get_instance();
}
add_action( 'plugins_loaded', 'Site_Secrets' );