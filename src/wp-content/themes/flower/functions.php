<?php
 //Turn off all error reporting
 //error_reporting(0);

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require get_template_directory() . '/functions/function-assets.php';
require get_template_directory() . '/functions/function-block.php';
require get_template_directory() . '/functions/function-woocommerce.php';

// set up mennu
function flower_menus() {
    register_nav_menus(
            array(
                'main-menu' => __( 'Menu Primary', 'flower' ),
                'sub-menu' => __( 'Menu Sub', 'flower' ),
                'products-menu' => __( 'Menu Products', 'flower' ),
                'information-menu' => __( 'Menu Information', 'flower' ),
            )
    );
}

add_action('init', 'flower_menus');

// Theme Setting
if ( function_exists( 'acf_add_options_page' ) ) {
    $parent = acf_add_options_page( array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_page( array(
        'page_title' => __( 'Header', 'flower' ),
        'menu_title' => __( 'Header', 'flower' ),
        'parent_slug' => $parent['menu_slug'],
    ));
    acf_add_options_page( array(
        'page_title' => __( 'Footer', 'flower' ),
        'menu_title' => __( 'Footer', 'flower' ),
        'parent_slug' => $parent['menu_slug'],
    ));
    acf_add_options_page( array(
        'page_title' => __( 'General', 'flower' ),
        'menu_title' => __( 'General', 'flower' ),
        'parent_slug' => $parent['menu_slug'],
    ));

}

if ( ! isset( $content_width ) ) $content_width = 900;

add_action( 'after_setup_theme', 'flower_after_setup_themes' );
function flower_after_setup_themes() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
}



// Errors next to the field with the error * /
add_filter( 'woocommerce_form_field', 'checkout_validation_fields_error', 10, 4 );
 
function checkout_validation_fields_error ( $field, $key, $args, $value ) {
    if ( strpos( $field, '<span class="woocommerce-input-wrapper">' ) !== false && $args['required'] ) {
       $error = '<span class="error-inline" style="display:none">';
       $error .= sprintf( __( '%s <span class="error-inline-left" > is a not valid.</span>', 'woocommerce' ), $args['label'] );
       $error .= '</span>';
       $field = substr_replace( $field, $error, strpos( $field, '</span>' ), 0);
    }
    return $field;
}