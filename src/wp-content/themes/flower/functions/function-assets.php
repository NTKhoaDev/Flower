<?php

// Add backend styles for Gutenberg.
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function gutenberg_editor_assets() {
  // Load the theme styles within Gutenberg. CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css?time=' . time(), array(), false);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css?time=' . time(), array(), false);
    wp_enqueue_style('my-gutenberg-editor-admin', get_theme_file_uri('/assets/css/admin.css'), FALSE);
}

function course_add_css_js() {
    // ADD CSS

    wp_enqueue_style('font-css', get_template_directory_uri() . '/assets/css/font.css?time=' . time(), array(), false);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css?time=' . time(), array(), false);
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css?time=' . time(), array(), false);
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css?time=' . time(), array(), false);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css?time=' . time(), array(), false);
    
    // ADD JS
    wp_enqueue_script('main-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('lazyload-min', get_template_directory_uri() . '/assets/js/lazyload.min.js', array(), false, true);
    wp_enqueue_script('slick-min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true);
    wp_enqueue_script('masonry-min', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array(), false, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/simpleParallax.js', array(), false, true);
    wp_enqueue_script('scrollreveal-min', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), false, true);


    if (is_singular()) {
        wp_enqueue_script('comment-reply');
    }
    wp_enqueue_script('js-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

    wp_localize_script(
            'js-main',
            'ajax_object',
            array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'wpnonce'  => wp_create_nonce('ajax-nonce'),
                )
    );
}

add_action('wp_enqueue_scripts', 'course_add_css_js', 20);

// function link
function flower_get_link( $key_name ) {
    if (isset( $key_name ) && is_array( $key_name )) {
        if (isset( $key_name['url']) ) {
            return $key_name['url'];
        }
    }
    return "#";
}
// function link title
function flower_get_link_title( $key_name ) {
    if (isset( $key_name ) && is_array( $key_name )) {
        if (isset( $key_name['title'] )) {
            return $key_name['title'];
        }
    }
    return "";
}

