<?php
	
/*
Plugin Name: Theme Info in Toolbar
Plugin URI: https://github.com/JeremyEnglert/Theme-Info-in-Toolbar
Description: A plugin to display the theme name and version number in the admin toolbar area.
Version: 1.0
Author: Jeremy Englert
Author URI: http://jointswp.com
License: GPLv2 or later
*/

add_action( 'admin_bar_menu', 'theme_info_toolbar', 999 );

function theme_info_toolbar( $wp_admin_bar ) {
	
	$current_theme = wp_get_theme();
	$theme_name = $current_theme->get( 'Name' );
	$theme_version = $current_theme->get( 'Version' );
		
	$args = array(
		'id'    => 'current_theme',
		'title' => esc_html( $theme_name ) . " " . esc_html( $theme_version ),
		'meta'  => array( 'class' => 'current-theme' )
	);
	
	$wp_admin_bar->add_node( $args );
}