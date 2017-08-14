<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * @link       http://chunky.io/wordpress
 * @since      1.0.0
 *
 * @package    Chunkypress
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
