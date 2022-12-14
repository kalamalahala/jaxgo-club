<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/kalamalahala/
 * @since             1.0.0
 * @package           Jaxgo_Club
 *
 * @wordpress-plugin
 * Plugin Name:       Jacksonville Go Club Administration
 * Plugin URI:        https://github.com/kalamalahala/jaxgo-club
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Tyler Karle
 * Author URI:        https://github.com/kalamalahala/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jaxgo-club
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
define( 'JAXGO_CLUB_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jaxgo-club-activator.php
 */
function activate_jaxgo_club() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jaxgo-club-activator.php';
	Jaxgo_Club_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jaxgo-club-deactivator.php
 */
function deactivate_jaxgo_club() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jaxgo-club-deactivator.php';
	Jaxgo_Club_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jaxgo_club' );
register_deactivation_hook( __FILE__, 'deactivate_jaxgo_club' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jaxgo-club.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jaxgo_club() {

	$plugin = new Jaxgo_Club();
	$plugin->run();

}
run_jaxgo_club();
