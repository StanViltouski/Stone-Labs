<?php
/**
 * stone-lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stone-lab
 */

if ( ! function_exists( 'stone_lab_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stone_lab_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on stone-lab, use a find and replace
		 * to change 'stone-lab' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stone-lab', get_template_directory() . '/languages' );

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
			'header-menu' => esc_html__( 'primary', 'stone-lab' ),
			'footer-menu' => esc_html__( 'Footer', 'stone-lab' ),
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
		add_theme_support( 'custom-background', apply_filters( 'stone_lab_custom_background_args', array(
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
add_action( 'after_setup_theme', 'stone_lab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stone_lab_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'stone_lab_content_width', 640 );
}
add_action( 'after_setup_theme', 'stone_lab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stone_lab_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer nameplate', 'stone-lab' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stone-lab' ),
		'before_widget' => '<section id="%1$s" class="inquiry-description">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="inquiry-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'stone_lab_widgets_init' );

function stone_lab_widgets_share() {
	register_sidebar( array(
		'name'          => esc_html__( 'Button share', 'stone-lab' ),
		'id'            => 'share-button',
		'description'   => esc_html__( 'Add widgets here.', 'stone-lab' ),
		'before_widget' => false,
		'after_widget'  => false,
		'before_title'  => false,
		'after_title'   => false,
	) );
}
add_action( 'widgets_init', 'stone_lab_widgets_share' );


/*Async Load*/

function add_async_forscript($url)
{
    if (strpos($url, '#asyncload')===false)
        return $url;
    else
        return str_replace('#asyncload', '', $url)."' async='async"; 
}
add_filter('clean_url', 'add_async_forscript', 11, 1);


/**
 * Enqueue scripts and styles.
 */
function stone_lab_scripts() {
	wp_enqueue_style( 'stone-lab-style', get_stylesheet_uri() );
	wp_enqueue_style('main-styles', get_template_directory_uri() . '/layouts/app.css', array('owl.carousel.min'));
	wp_enqueue_style('apply-form', get_template_directory_uri() . '/layouts/apply-form.css');
	wp_enqueue_style('contacts', get_template_directory_uri() . '/layouts/contacts.css');
	wp_enqueue_style('showcases', get_template_directory_uri() . '/layouts/showcases.css');
	wp_enqueue_style('approach', get_template_directory_uri() . '/layouts/approach.css');
	wp_enqueue_style('article', get_template_directory_uri() . '/layouts/article.css');


//library style
	wp_enqueue_style('jquery.flipster', get_template_directory_uri() . '/layouts/lib/jquery.flipster.css');
	wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/layouts/lib/owl.carousel.min.css');
	wp_enqueue_style('owl.theme.default.min', get_template_directory_uri() . '/layouts/lib/owl.theme.default.min.css');
	wp_enqueue_style('owl.theme.green', get_template_directory_uri() . '/layouts/lib/owl.theme.green.css');


//library script
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '', true );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/lib/owl.carousel.min.js', array('lab-main-scripts'), '1.0.0', true );
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/lib/owl.animate.js', array(), '1.0.0', true );
	wp_enqueue_script( 'autoheight', get_template_directory_uri() . '/js/lib/owl.autoheight.js', array(), '1.0.0', true );
	wp_enqueue_script( 'flipster.min', get_template_directory_uri() . '/js/lib/jquery.flipster.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/lib/owl.carousel.js', array(), '1.0.0', true );



	//scripts
	wp_register_script( 'lab-form', get_template_directory_uri() . '/js/form.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'lab-showcase_bg', get_template_directory_uri() . '/js/showcase_bg.js', array(), '1.0.0', true );
	wp_enqueue_script( 'lab-main-scripts', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
	wp_enqueue_script( 'stone-lab-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'stone-lab-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//scripts google
	wp_enqueue_script('googletagmanager', '//googletagmanager.com/gtag/js?id=UA-33837333-4#asyncload', false, null, false);
	wp_enqueue_script( 'google-manager', get_template_directory_uri() . '/js/googletagmanager.js', array(), '1.0.0');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'stone_lab_scripts' );



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
 * Register Post Type.
 */
require get_template_directory() . '/inc/post-type.php';

/**
 * Redux sample-config
 */
require get_template_directory() . '/inc/sample-config.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

