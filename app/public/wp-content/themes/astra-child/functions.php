<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
	wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

function wp4wp_scripts() {
  wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/styles/main.css', array(), '1.0', false);
  wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/assets/scripts/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp4wp_scripts');