<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://denyshnatiuk.github.io/bio/
 * @since             1.0.0
 * @package           Darklight
 *
 * @wordpress-plugin
 * Plugin Name:       dark-light theme switcher
 * Plugin URI:        darklight
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Den Hnatiuk
 * Author URI:        https://denyshnatiuk.github.io/bio/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       darklight
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
define( 'DARKLIGHT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-darklight-activator.php
 */
function activate_darklight() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-darklight-activator.php';
	Darklight_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-darklight-deactivator.php
 */
function deactivate_darklight() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-darklight-deactivator.php';
	Darklight_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_darklight' );
register_deactivation_hook( __FILE__, 'deactivate_darklight' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-darklight.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_darklight() {

	$plugin = new Darklight();
	$plugin->run();

}
run_darklight();
