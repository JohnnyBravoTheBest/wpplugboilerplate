<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mustcode.xyz/
 * @since             1.0.0
 * @package           Rocket_Books
 *
 * @wordpress-plugin
 * Plugin Name:       Rocket Books
 * Plugin URI:        https://mustcode.xyz/
 * Description:       Rocket Books Udm plugin made with wppb.me's generator.
 * Version:           1.0.0
 * Author:            Ion Tulbure
 * Author URI:        https://mustcode.xyz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rocket-books
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
define( 'ROCKET_BOOKS_VERSION', '1.0.0' );

/**
 * Currently plugin name.
 */
define( 'ROCKET_BOOKS_NAME', 'rocket-books' );

// Plugin Diretly Path
/**
 * Plugin base dir path.
 * used to locate plugin resources primarily code files
 * Start at version 1.0.0
 */
define ('ROCKET_BOOKS_BASE_DIR', plugin_dir_path(  __FILE__  ));

// Plugin Directly URL
/**
 * Plugin url to access its resources through browser
 * used to access assets images/css/js files
 * Start at version 1.0.0
 */
define ('ROCKET_BOOKS_PLUGIN_URL', plugin_dir_url( __FILE__ ));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rocket-books-activator.php
 */
function activate_rocket_books() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rocket-books-activator.php';
	Rocket_Books_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rocket-books-deactivator.php
 */
function deactivate_rocket_books() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rocket-books-deactivator.php';
	Rocket_Books_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rocket_books' );
register_deactivation_hook( __FILE__, 'deactivate_rocket_books' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rocket-books.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rocket_books() {

	$plugin = new Rocket_Books();
	$plugin->run();

}

run_rocket_books();
