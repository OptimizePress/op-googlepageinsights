<?php
/**
 * Plugin Name: OptimizePress Google Page Insights
 * Plugin URI:  www.optimizepress.com
 * Description: Plugin forces to render all CSS and JS to footer
 * Version:     1.0.0
 * Author:      OptimizePress <info@optimizepress.com>
 * Author URI:  optimizepress.com
 */

function md_footer_enqueue_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
add_action('wp_enqueue_scripts', 'md_footer_enqueue_scripts');

function changeGoogleFontToFooter(){
    return 'wp_footer';
}
add_filter('op_googleFontRenderingLocation','changeGoogleFontToFooter');
