<?php
/**
 * Resume WordPress Theme Functions
 *
 * @package Resume_WP_Theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Theme setup
 */
function resume_wp_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add theme support for custom logo (optional, for future use)
    add_theme_support('custom-logo');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'resume-wp-theme'),
    ));
}
add_action('after_setup_theme', 'resume_wp_theme_setup');

/**
 * Enqueue scripts and styles
 */
function resume_wp_theme_scripts() {
    $theme_version = wp_get_theme()->get('Version');
    $theme_uri = get_template_directory_uri();
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', $theme_uri . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.6.0');
    
    // Google Fonts
    wp_enqueue_style('google-fonts-saira', 'https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900', array(), null);
    wp_enqueue_style('google-fonts-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', $theme_uri . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.7.0');
    
    // Devicons
    wp_enqueue_style('devicons', $theme_uri . '/vendor/devicons/css/devicons.min.css', array(), '2.0.0');
    
    // Simple Line Icons
    wp_enqueue_style('simple-line-icons', $theme_uri . '/vendor/simple-line-icons/css/simple-line-icons.css', array(), '2.4.0');
    
    // Theme styles
    wp_enqueue_style('resume-theme-style', $theme_uri . '/css/resume.min.css', array('bootstrap'), $theme_version);
    wp_enqueue_style('resume-theme-more-styles', $theme_uri . '/css/more-styles.css', array('resume-theme-style'), $theme_version);
    
    // Main stylesheet
    wp_enqueue_style('resume-wp-theme-style', get_stylesheet_uri(), array('resume-theme-style'), $theme_version);
    
    // jQuery (WordPress includes it, but we can specify)
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', $theme_uri . '/vendor/jquery/jquery.min.js', array(), '3.6.0', true);
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', $theme_uri . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '4.6.0', true);
    
    // jQuery Easing
    wp_enqueue_script('jquery-easing', $theme_uri . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '1.4.1', true);
    
    // Theme scripts
    wp_enqueue_script('resume-theme-script', $theme_uri . '/js/resume.js', array('jquery', 'bootstrap', 'jquery-easing'), $theme_version, true);
    wp_enqueue_script('resume-theme-utils', $theme_uri . '/js/utils.js', array('jquery'), $theme_version, true);
    
    // Localize script for AJAX (if needed in future)
    wp_localize_script('resume-theme-script', 'resumeTheme', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_enqueue_scripts', 'resume_wp_theme_scripts');

/**
 * Add Google Tag Manager to head
 */
function resume_wp_theme_gtm_head() {
    ?>
    <!-- Google Tag Manager: Data Layer -->
    <script>
    dataLayer = [];
    </script>
    <!-- End Google Tag Manager: Data Layer -->

    <!-- Google Tag Manager: Base Install -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WVJPZJ2');</script>
    <!-- End Google Tag Manager: Base Install -->
    <?php
}
add_action('wp_head', 'resume_wp_theme_gtm_head');

/**
 * Register widget areas
 */
function resume_wp_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'resume-wp-theme'),
        'id'            => 'blog-sidebar',
        'description'   => __('Add widgets here to appear in your blog sidebar.', 'resume-wp-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'resume_wp_theme_widgets_init');

/**
 * Custom excerpt length
 */
function resume_wp_theme_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'resume_wp_theme_excerpt_length');

/**
 * Custom excerpt more
 */
function resume_wp_theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'resume_wp_theme_excerpt_more');

