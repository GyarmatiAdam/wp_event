<?php
/**
 * Plugin Name:       My Basics Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Adam Gyarmati
 * Text Domain:       my-basics-plugin
 */
// add_action('wp_head', 'change_head_css');

// add_action( 'the_content', 'add_to_posts' );

// function add_to_posts ( $content ) {
//     return $content .= '<div class="row" style="background-color:red"><p>This is a picture of my first Plugin:</p><img src="/wp_event/wp-content/plugins/wp_plugin/images/smile.png" alt="Smiley face" height="40" width="40"></div>';
// }

// add_action( 'the_title', 'change_title' );

// function change_title ( $content ) {
//     return $content .= 'Changed Title';
// }



function change_title ( $content ) {
    return $content = 'Changed Title';
}

add_filter( 'the_title', 'change_title' );