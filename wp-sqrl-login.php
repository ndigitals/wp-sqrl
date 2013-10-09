<?php
/**
 * @package   WP_SQRL_Login
 * @author    Tim Nolte <tim.nolte@ndigitals.com>
 * @license   GPL-2.0+
 * @link      http://ndigitals.com/wordpress/sqrl
 * @copyright 2013 Tim Nolte
 *
 * @wordpress-plugin
 * Plugin Name: WordPress SQRL Login
 * Plugin URI:  http://ndigitals.com/wordpress/sqrl
 * Description: A WordPress plugin that implements Steve Gibson's SQRL login system.
 * Version:     1.0.0
 * Author:      Tim Nolte <tim.nolte@ndigitals.com>
 * Author URI:  http://ndigitals.com
 * Text Domain: plugin-name-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-wp-sqrl-login.php' );

// Register hooks that are fired when the plugin is activated or deactivated.
// When the plugin is deleted, the uninstall.php file is loaded.
register_activation_hook( __FILE__, array( 'WP_SQRL_Login', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_SQRL_Login', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'WP_SQRL_Login', 'get_instance' ) );