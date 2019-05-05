<?php


if ( ! function_exists( 'my_wp_setup' ) ) :
	function my_wp_setup() {
		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'top-menu' => 'Верхнє Меню',
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'my_wp_setup' );





function my_wp_widgets_init() {
	register_sidebar( array(
		'name'          => 'Правий сайтбар',
		'id'            => 'sidebar-right',
		'description'   => 'Відображається справа від контенту',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'my_wp_widgets_init' );


function my_wp_scripts() {
wp_enqueue_style( 'my_wp-style', get_stylesheet_uri() );
wp_enqueue_script( 'my_wp-script', get_template_directory_uri() . '/js/script.js');

		
}
add_action( 'wp_enqueue_scripts', 'my_wp_scripts' );

?>