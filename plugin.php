<?php
/**
 * @link              https://github.com/vishalkakadiya
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Gutenberg Experiments - Based on create-guten-block
 * Plugin URI:        https://github.com/vishalkakadiya
 * Description:       Basically this plugin is for doing cool things with gutenberg.
 * Version:           1.0.0
 * Author:            Vishal Kakadiya
 * Author URI:        https://github.com/vishalkakadiya
 * Text Domain:       gutenburg-experiments
 * Domain Path:       /languages
 *
 * Ref: https://github.com/ahmadawais/create-guten-block/
 */


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
