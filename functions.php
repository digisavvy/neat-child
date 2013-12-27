<?php

/**
 * Basic theme features you can remove by uncommenting the appropriate line(s).
 */
function remove_neat_parent_theme_features() {
    // remove_theme_support( 'post-formats' );
    // remove_theme_support( 'post-thumbnails' );
    // remove_theme_support( 'custom-background' );
    // remove_theme_support( 'custom-header' );
    // remove_theme_support( 'automatic-feed-links' );
}

/**
 * Uncommenting these two lines will allow you to disable superfish and the meanmenu mobile nav
 */
function remove_neat_actions() {
    // remove_action( 'wp_head', 'dg_add_superfish' );
    // remove_action( 'wp_head', 'dg_add_meanmenu' );
}
add_action( 'init','remove_neat_actions' );

/**
 * Allows you to remove/unregister built in sidebars and widgets
 */
function remove_neat_parent_theme_sidebars() {
	// remove (some) WordPress default Widgets
	// unregister_widget( 'WP_Widget_Pages' );
	// unregister_widget( 'WP_Widget_Calendar' );

	// remove Parent Sidebars
	// unregister_sidebar( 'sidebar-1' );
}
add_action( 'widgets_init', 'remove_neat_parent_theme_sidebars', 15 );
