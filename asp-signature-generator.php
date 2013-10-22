<?php
/**
 * AmazonSimplePay Signature Generator.
 *
 * @package   AmazonSimplePay-signature-generator
 * @author    Iana Semenova<iana.semenova@n3wnormal.com>
 * @license   GPL-2.0+
 * @link      http://n3wnormal.com
 * @copyright 2013 New Normal
 *
 * @wordpress-plugin
 * Plugin Name: AmazonSimplePay Signature Generator
 * Plugin URI:  http://n3wnormal.com
 * Description: Dynamically generates amazon simple pay signature parameter for the button form with dynamic inputs.
 * Version:     1.0.0
 * Author:      midori no risu
 * Author URI:  http://n3wnormal.com
 * Text Domain: plugin-name-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
require_once( plugin_dir_path( __FILE__ ) . 'classes/ButtonGenerator.php' );
require_once( plugin_dir_path( __FILE__ ) . 'classes/SignatureUtils.php' );
require_once( plugin_dir_path( __FILE__ ) . 'classes/StandatdButtonSample.php' );

require_once( plugin_dir_path( __FILE__ ) . 'class-asp-signature-generator.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'AmazonSimplePay-signature-generator', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'AmazonSimplePay-signature-generator', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'AmazonSimplePay-signature-generator', 'get_instance' ) );
