<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              mariolafuente.com
 * @since             1.0.0
 * @package           Plugin_Base_Client
 *
 * @wordpress-plugin
 * Plugin Name:       plugin base client
 * Plugin URI:        mariolafuente.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            mariolafuente.com
 * Author URI:        mariolafuente.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-base-client
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_BASE_CLIENT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-base-client-activator.php
 */
function activate_plugin_base_client() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-base-client-activator.php';
	Plugin_Base_Client_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-base-client-deactivator.php
 */
function deactivate_plugin_base_client() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-base-client-deactivator.php';
	Plugin_Base_Client_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_base_client' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_base_client' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-base-client.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_base_client() {

	$plugin = new Plugin_Base_Client();
	$plugin->run();

}
run_plugin_base_client();
