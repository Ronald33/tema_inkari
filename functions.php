<?php
/**
 * Functions and definitions
 *
 * @link https://github.com/Ronald33/rtheme
 *
 * @package WordPress
 * @subpackage RTheme
 * @since 1.0.0
 * @version 1.0.0
 */

if(!function_exists('rtheme_setup')):
    function rtheme_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);
    }
endif;

add_action('after_setup_theme', 'rtheme_setup');

if(!function_exists('rtheme_scripts')):

    function rtheme_scripts()
    {
        // Css
        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/node_modules/bootstrap/dist/css/bootstrap.min.css');
        wp_register_style('mdbootstrap', get_template_directory_uri() . '/assets/node_modules/mdbootstrap/css/mdb.min.css', ['bootstrap']);

        wp_register_style('rmenu', get_template_directory_uri() . '/assets/rmenu/rmenu.css', ['bootstrap']);

        wp_register_style('animate', get_template_directory_uri() . '/assets/node_modules/@fortawesome/fontawesome-free/css/all.min.css');
        wp_register_style('animate', get_template_directory_uri() . '/assets/node_modules/animate.css/animate.min.css');
        wp_register_style('slick', get_template_directory_uri() . '/assets/node_modules/slick-carousel/slick/slick.css', ['animate']);
        wp_register_style('slick-theme', get_template_directory_uri() . '/assets/hero-slider/slick-theme.css', ['slick']);

        wp_register_style('style', get_stylesheet_uri(), ['mdbootstrap', 'rmenu', 'slick-theme'], '1.0.0');
        
        wp_enqueue_style('style');

        // JS
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/node_modules/jquery/dist/jquery.min.js', [], null, true);
        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/node_modules/bootstrap/dist/js/bootstrap.min.js', ['jquery'], null, true);
        wp_register_script('mdbootstrap', get_template_directory_uri() . '/assets/node_modules/mdbootstrap/js/mdb.min.js', ['jquery'], null, true);
        wp_register_script('rmenu', get_template_directory_uri() . '/assets/rmenu/rmenu.js', ['mdbootstrap'], null, true);

        wp_register_script('slick', get_template_directory_uri() . '/assets/node_modules/slick-carousel/slick/slick.min.js', [], null, true);
        wp_register_script('slick-animation', get_template_directory_uri() . '/assets/node_modules/slick-animation/slick-animation.min.js', ['slick'], null, true);

        wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', ['rmenu', 'slick-animation'], '1.0.0', true);

        wp_enqueue_script('scripts');
        
    }

endif;

add_action('wp_enqueue_scripts', 'rtheme_scripts');

if(!function_exists('custom_scripts')):
    function custom_scripts()
    {
        if(is_page(['migracion-de-pbs-a-slurm']))
        {
            wp_enqueue_script('btable', get_template_directory_uri() . '/assets/js/btable.js', [], null, true );
        }
    }
endif;

add_action('wp_enqueue_scripts', 'custom_scripts');

if(!function_exists('rtheme_menus')):

    function rtheme_menus()
    {
        register_nav_menus([
            'main_menu' => __('Menú principal', 'rtheme'), 
            'social_menu' => __('Menú redes sociales', 'rtheme')
        ]);
    }

endif;

add_action('init', 'rtheme_menus');

if(!function_exists('rtheme_register_custom_nav_walker')):
    function rtheme_register_custom_nav_walker()
    {
        require_once 'class-wp-bootstrap-navwalker.php';
    }
endif;

add_action('after_setup_theme', 'rtheme_register_custom_nav_walker');

if(!function_exists('rtheme_custom_logo_setup')):
    function themename_custom_logo_setup()
    {
        
        add_theme_support( 'custom-logo', [
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        ]);
    }
endif;

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );