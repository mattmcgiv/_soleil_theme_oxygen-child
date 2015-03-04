<?php
/**
 *	Oxygen WordPress Theme
 *	
 *	Laborator.co
 *	www.laborator.co 
 */


add_action('wp_enqueue_scripts', 'enqueue_childtheme_scripts', 1000);

function enqueue_childtheme_scripts()
{
	wp_enqueue_style('oxygen-child', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script( 'jquery-ui-dialog', false, array(), false, true );
}

add_action('wp_head', 'soleil_no_menu_on_checkout');

function soleil_no_menu_on_checkout() {
  if (is_checkout()) {
    define("NO_HEADER_MENU", true);
    define("NO_FOOTER_MENU", true);
  }
}

//DISABLE WOOCOMMERCE PRETTY PHOTO SCRIPTS
add_action( 'wp_print_scripts', 'prettyPhoto_deregister_javascript', 100 );

function prettyPhoto_deregister_javascript() {
  wp_deregister_script( 'prettyPhoto' );
  wp_deregister_script( 'prettyPhoto-init' );
}

//DISABLE WOOCOMMERCE PRETTY PHOTO STYLE
add_action( 'wp_print_styles', 'prettyPhoto_deregister_styles', 100 );

function prettyPhoto_deregister_styles() {
  wp_deregister_style( 'woocommerce_prettyPhoto_css' );
}