<?php

/**
 * York University 2016 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package York_University_2016
 */
if (!function_exists('yorku_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function yorku_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on York University 2016, use a find and replace
         * to change 'yorku' to the name of your theme in all the template files.
         */
        load_theme_textdomain('yorku', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
          'primary' => esc_html__('Primary', 'yorku'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
          'search-form',
          'comment-form',
          'comment-list',
          'gallery',
          'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('yorku_custom_background_args', array(
          'default-color' => 'ffffff',
          'default-image' => '',
        )));
    }

endif;
add_action('after_setup_theme', 'yorku_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yorku_content_width() {
    $GLOBALS['content_width'] = apply_filters('yorku_content_width', 640);
}

add_action('after_setup_theme', 'yorku_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yorku_widgets_init() {
    register_sidebar(array(
      'name' => esc_html__('Sidebar', 'yorku'),
      'id' => 'sidebar-1',
      'description' => esc_html__('Add widgets here.', 'yorku'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget' => '</section>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
    ));

    register_sidebar(array(
      'name' => esc_html__('Slideshow', 'yorku'),
      'id' => 'slideshow-1',
      'description' => esc_html__('Add widgets here.', 'yorku'),
      'before_widget' => '<div class="yorku-slidshow-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h1>',
      'after_title' => '</h1>',
    ));

    register_sidebar(array(
      'name' => esc_html__('Footer Panel 1', 'yorku'),
      'id' => 'footer-1',
      'description' => esc_html__('Add widgets here.', 'yorku'),
      'before_widget' => '<div class="footer-panel-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h1>',
      'after_title' => '</h1>',
    ));

    register_sidebar(array(
      'name' => esc_html__('Footer Panel 2', 'yorku'),
      'id' => 'footer-2',
      'description' => esc_html__('Add widgets here.', 'yorku'),
      'before_widget' => '<div class="footer-panel-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h1>',
      'after_title' => '</h1>',
    ));

    register_sidebar(array(
      'name' => esc_html__('Footer Panel 3', 'yorku'),
      'id' => 'footer-3',
      'description' => esc_html__('Add widgets here.', 'yorku'),
      'before_widget' => '<div class="footer-panel-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h1>',
      'after_title' => '</h1>',
    ));
}

add_action('widgets_init', 'yorku_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function yorku_scripts() {

    wp_enqueue_style('yorku-style', get_stylesheet_uri());

    wp_register_style('smart-menu-core', get_template_directory_uri() . '/css/sm-core-css.css', array(), '20151215', false, 'all');

    wp_enqueue_style('smart-menu-core');

//    wp_register_style('smart-menu-yorku', get_template_directory_uri() . '/css/sm-yorku.css', array(), '20151215', false, 'all');
//    
//    wp_enqueue_style('smart-menu-yorku');

    wp_register_style('smart-menu-yorku-modern', get_template_directory_uri() . '/css/sm-yorku-modern.css', array(), '20151215', false, 'all');

    wp_enqueue_style('smart-menu-yorku-modern');

    wp_register_style('basictable-css', get_template_directory_uri() . '/css/basictable.css', array(), '20151215', false, 'all');

    wp_enqueue_style('basictable-css');

    wp_register_style('basictable-tweaks', get_template_directory_uri() . '/css/basictable-tweaks.css', array(), '20151215', false, 'all');

    wp_enqueue_style('basictable-tweaks');

    wp_enqueue_script('yorku-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('yorku-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    wp_enqueue_script('quick-links', get_template_directory_uri() . '/js/quick-links.js', array(), '20151215', true);

    wp_enqueue_script('smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.min.js', array('jquery'), '20151215', true);

    wp_enqueue_script('basictable', get_template_directory_uri() . '/js/jquery.basictable.min.js', array('jquery'), '20151215', true);

    wp_enqueue_script('general', get_template_directory_uri() . '/js/general.js', array('smartmenus'), '20151215', true);



    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'yorku_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
