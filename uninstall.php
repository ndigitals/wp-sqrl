<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   WP_SQRL_Login
 * @author    Tim Nolte <tim.nolte@ndigitals.com>
 * @license   GPL-2.0+
 * @link      http://ndigitals.com/wordpress/sqrl
 * @copyright 2013 Tim Nolte
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// TODO: Define uninstall functionality here