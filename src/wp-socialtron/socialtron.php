<?php

/**
 * Plugin Name: WP Socialtron
 * Plugin URI:  http://github.com/wykydtronik/wp-socialtron
 * Description: Social sharing functionality with fixed mobile buttons. Open source, non-premium.
 * Version:     0.2
 * Author:      Eddi Hughes
 * Author URI:  http://codesleepshred.com
 * Tags:        social, social media, social network, social share, social share buttons
 */

function socialtron_styles() {
    wp_enqueue_style( 'socialtron_style', plugins_url( '/css/socialstyle.css', __FILE__), false, '1.0.0', 'all');
    wp_enqueue_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '4.2.0' );
}
function socialtron_socialjs() {
    wp_enqueue_script( 'socialtron_script', plugins_url('/js/socialjs.js', __FILE__));
}
add_action( 'wp_enqueue_scripts', 'socialtron_styles' );
add_action( 'wp_footer', 'socialtron_socialjs');

 /*
  * @TODO: Plugin Admin Page - Twitter
  * @TODO: Mobile & Desktop
  */

?>
