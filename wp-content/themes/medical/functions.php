<?php
/**
 * Created by: QuyNH
 * Created at: 2015/06/11
 */

/**
 *  Themes setup
 */
add_action( 'after_setup_theme', 'medical_setup_theme' );
function medical_setup_theme() {
    // Register menu
    register_nav_menu( 'primary', __( 'Home Menu', 'theme-slug' ) );

    // Remove tag HTML auto generate
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );

    // Add post thumbnails
    add_theme_support( 'post-thumbnails' );
}

/**
 *  Excerpt to show link
 */
function new_excerpt_length() {
    return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more() {
    global $post;
    return "<a class='more-link' href='".get_permalink($post->ID)."'> See more ...</a>";
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 *  Register menu Header Setting
 */
add_action( 'admin_menu', 'register_menu_header_setting' );
function register_menu_header_setting() {
    add_options_page( 'Header Setting', 'Header Setting', 'manage_options', 'header_setting', 'upload_logo' );
}

function upload_logo() {
    require_once(get_template_directory() . '/inc/admin/upload-logo.php');
}