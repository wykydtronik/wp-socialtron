<?php

/**
 * Plugin Name: WP Socialtron
 * Plugin URI:  http://github.com/wykydtronik/wp-socialtron
 * Description: Social sharing functionality with fixed mobile buttons. Open source, non-premium.
 * Version:     0.1
 * Author:      Eddi Hughes
 * Author URI:  http://codesleepshred.com
 * Tags:        social, social media, social network, social share, social share buttons
 */

function socialtron_scripts() {
    wp_register_script('socialtron-script' plugins_url('/js/socialjs.js', __FILE__));
    wp_enqueue_script('socialtron-script');
}
add_action('wp_enqueue_script', 'socialtron_scripts');

function socialtron_styles()
{
    wp_register_style( 'socialtron_style', plugins_url( '/css/socialstyle.css', __FILE__ ), array(), '20120208', 'all' );
    wp_enqueue_style( 'socialtron_style' );
}
add_action( 'wp_enqueue_scripts', 'socialtron_styles' );

 /*
  * @TODO: Add Font Awesome To Head
  * @TODO: Plugin Admin Page - Twitter
  * @TODO: Mobile & Desktop
  */

?>
