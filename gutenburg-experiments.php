<?php

/**
 * @link              https://github.com/vishalkakadiya
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Gutenburg Experiments
 * Plugin URI:        https://github.com/vishalkakadiya
 * Description:       Basically this plugin is for doing cool things with gutenburg.
 * Version:           1.0.0
 * Author:            Vishal Kakadiya
 * Author URI:        https://github.com/vishalkakadiya
 * Text Domain:       gutenburg-experiments
 * Domain Path:       /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function vk_static_block_example() {
	wp_enqueue_script(
		'vk-static-block-example', // Unique handle.
		plugins_url( 'block.js', __FILE__ ), // block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ) // filemtime — Gets file modification time.
	);
}
add_action( 'enqueue_block_editor_assets', 'vk_static_block_example' );
