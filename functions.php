<?php

if (!function_exists('yass_setup')) :

    function yass_setup()
    {
        load_theme_textdomain('yass', get_template_directory() . '/languages');

        //Let WordPress manage the document title.
        add_theme_support('title-tag');

        //Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        set_post_thumbnail_size(1200, 9999);
        register_nav_menus(array(
            'main-left' => __('Main Left','yass'),
            'main-right' => __('Main Right','yass'),
            'main-footer' => __('Main Footer','yass'),
        ));
        //  HTML5 support.

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )); 


    }
endif;
add_action('after_setup_theme', 'yass_setup');

function yass_scripts(){

    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array());
//    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.min.css', array());



    wp_enqueue_script('swiper.js','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js', array('jquery'), '', true);
    wp_enqueue_script('countdown.js','https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js', array('jquery'), '', true);
    wp_enqueue_script('cookie.js','https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js', array('jquery'), '', true);
    wp_enqueue_script('scrollReveal', 'https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.4.0/scrollreveal.min.js', array('jquery'), '', true);
    wp_enqueue_script('magnific', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array('jquery'), '', true);
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
//    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/script.min.js', array('jquery'), '', true);

}
add_action('wp_enqueue_scripts', 'yass_scripts');

show_admin_bar(false);



//SVG SUPPORT
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title'	=> 'Theme Options',
        'menu_slug' 	=> 'theme-options',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));


}


add_action( 'init', 'create_projects' );
function create_projects() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( ' Proiecte' ),
                'singular_name' => __( ' Proiecte' )
            ),
            'public' => true,
            'publicly_queryable'  => true,
            'menu_icon' => 'dashicons-admin-page',
            'supports' => array('title','editor','thumbnail' ),
        )
    );
};


