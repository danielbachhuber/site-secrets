<?php
/*
Plugin Name: Site Secrets
Version: 0.1
Description: Keep your WordPress site private.
Author: Daniel Bachhuber, Digital First Media
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
			self::$instance->setup_actions();
		}

		return self::$instance;
	}

	/**
	 * Set up our WordPress integrations
	 */
	private function setup_actions() {

		add_action( 'template_redirect', array( $this, 'action_template_redirect' ) );	

	}

	/**
	 * Can the user view this site?
	 * 
	 * @return bool
	 */
	private function user_can_view() {

		if ( is_user_logged_in() ) {

			// Default behavior is that viewing the site requires membership
			$requires_membership = apply_filters( 'site_secrets_requires_membership', true );
			if ( $requires_membership && ! is_user_member_of_blog() ) {
				return false;
			}

			return true;
		}

		return false;

	}

	/**
	 * If the user doesn't have permission to view this site, redirect to login
	 */
	public function action_template_redirect() {
		global $pagenow;

		if ( 'wp-login.php' !== $pagenow && ! $this->user_can_view() ) {
			auth_redirect();
		}

	}

}

/**
 * Load the plugin
 */
function Site_Secrets() {
	return Site_Secrets::get_instance();
}
add_action( 'plugins_loaded', 'Site_Secrets' );