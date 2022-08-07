<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/kalamalahala/
 * @since      1.0.0
 *
 * @package    Jaxgo_Club
 * @subpackage Jaxgo_Club/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Jaxgo_Club
 * @subpackage Jaxgo_Club/includes
 * @author     Tyler Karle <tyler@jaxgo.club>
 */
class Jaxgo_Club_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'jaxgo-club',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
