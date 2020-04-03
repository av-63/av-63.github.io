<?php
/**
 * lesson_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lesson_theme
 */

if ( ! function_exists( 'lesson_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lesson_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lesson_theme, use a find and replace
		 * to change 'lesson_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lesson_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'lesson_theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lesson_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'lesson_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lesson_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lesson_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'lesson_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lesson_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lesson_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lesson_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lesson_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lesson_theme_scripts() {
	// Подключение главного файла стилей от темы (style.css)
	// wp_enqueue_style( 'lesson_theme-style', get_stylesheet_uri() );

	// Подключение bootstrap
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');

	// Подключение Font Awesome
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');

	// Подключение нашего файла стилей
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/freelancer.min.css');

	// Подключение скриптов
	// wp_enqueue_script( 'lesson_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// Подключение bootstrap-js
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );

	// Подключение easing-js
	wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), null, true );

	// Подключение validation-js
	wp_enqueue_script( 'validation-js', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), null, true );

	// Подключение contact-js
	wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/js/contact_me.js', array('jquery'), null, true );

	// Подключение freelancer-js
	wp_enqueue_script( 'freelancer-js', get_template_directory_uri() . '/js/freelancer.min.js', array('jquery'), null, true );

	//wp_enqueue_script( 'lesson_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lesson_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

