<?php
/**
 * My_WP functions and definitions
 *
 */

if ( ! function_exists( 'my_wp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function my_wp_setup() {
		
		
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
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header_menu' => 'Меню в шапке',
		) );

		
	
		/**
		 * Add support for core custom logo.
		 *
		 * 
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'my_wp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * 
 */
function my_wp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'my_wp_content_width', 640 );
}
add_action( 'after_setup_theme', 'my_wp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_wp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'my_wp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp_start' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Top-Sidebar', 'my_wp' ),
		'id'            => 'sidebar-top',
		'description'   => esc_html__( 'Add widgets top sidebar', 'wp_start' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'afterS_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_wp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_wp_scripts() {
	
	wp_enqueue_style( 'my_wp-style', get_stylesheet_uri());

	wp_enqueue_script( 'my_wp-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


}
add_action( 'wp_enqueue_scripts', 'my_wp_scripts' );

