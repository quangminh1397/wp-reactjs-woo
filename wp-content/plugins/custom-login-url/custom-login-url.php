<?php
/*
Plugin Name: Custom WPS hide login url
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Plugin constants
define( 'WPS_HIDE_LOGIN_VERSION', '1.8.6' );
define( 'WPS_HIDE_LOGIN_FOLDER', 'wps-hide-login' );

define( 'WPS_HIDE_LOGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPS_HIDE_LOGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPS_HIDE_LOGIN_BASENAME', plugin_basename( __FILE__ ) );

// require_once WPS_HIDE_LOGIN_DIR . 'autoload.php';
require_once WPS_HIDE_LOGIN_DIR . 'classes/plugin.php';

register_activation_hook( __FILE__, array( '\WPS\WPS_Hide_Login\Plugin', 'init' ) );

add_action( 'plugins_loaded', 'plugins_loaded_wps_hide_login_plugin' );
function plugins_loaded_wps_hide_login_plugin() {
	\WPS\WPS_Hide_Login\Plugin::get_instance();

	// load_plugin_textdomain( 'wps-hide-login', false, dirname( WPS_HIDE_LOGIN_BASENAME ) . '/languages' );
}