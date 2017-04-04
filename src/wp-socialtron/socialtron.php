<?php

/**
 * Plugin Name: WP Socialtron
 * Plugin URI:  http://github.com/wykydtronik/wp-socialtron
 * Description: Social sharing functionality with fixed mobile buttons. Open source, non-premium.
 * Version:     0.5
 * Author:      Eddi Hughes
 * Author URI:  http://codesleepshred.com
 * Tags:        social, social media, social network, social share, social share buttons
 */

function socialtron_styles() {
    wp_enqueue_style( 'socialtron_style', plugins_url( '/css/socialstyle.css', __FILE__), false, '1.0.0', 'all');
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );;
}

function socialtron_socialjs() {
    wp_enqueue_script( 'socialtron_script', plugins_url('/js/socialjs.js', __FILE__));
}

add_action( 'wp_enqueue_scripts', 'socialtron_styles' );
add_action( 'wp_footer', 'socialtron_socialjs');

// Pass Plugin Options To JS
wp_register_script( 'share_handle', '' );

// Localize the script with new data
$translation_array = array(
	'blogtwitter' => get_option('blog_twitter'),
	'a_value' => '10'
);
wp_localize_script( 'share_handle', 'sharetron_object', $translation_array );

// Enqueued script with localized data.
wp_enqueue_script( 'share_handle' );

function socialtron_create_menu() {
	//create new top-level menu
	add_menu_page('Socialtron', 'Socialtron', 'manage_options', __FILE__, 'socialtron_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_socialtron_settings' );
}

function register_socialtron_settings() {
	//register our settings
	register_setting( 'socialtron-plugin-settings-group', 'blog_twitter' );
}

add_action('admin_menu', 'socialtron_create_menu');

function socialtron_settings_page() {
?>
<div class="wrap">
<h1>WP Socialtron</h1>
<p>Your social share buttons will float fixed at the bottom of your mobile browser.</p>

<form method="post" action="options.php">
    <?php settings_fields( 'socialtron-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'socialtron-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Your Blog Twitter</th>
        <td><em>@</em> <input type="text" name="blog_twitter" pattern="\w*" value="<?php echo esc_attr( get_option('blog_twitter') ); ?>" /></td>
        </tr>
    </table>

    <?php submit_button(); ?>

</form>
</div>
<?php }

 // @TODO: Mobile & Desktop

?>
