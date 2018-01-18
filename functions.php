<?php
/**
 * Smiling Barracuda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smiling_Barracuda
 */

if ( ! function_exists( 'smiling_barracuda_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function smiling_barracuda_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Smiling Barracuda, use a find and replace
		 * to change 'smiling-barracuda' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'smiling-barracuda', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'smiling-barracuda' ),
			'secondary' => esc_html__( 'Secondary', 'smiling-barracuda' ),
			
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
		add_theme_support( 'custom-background', apply_filters( 'smiling_barracuda_custom_background_args', array(
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
			'height'      => 324,
			'width'       => 304,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'smiling_barracuda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smiling_barracuda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smiling_barracuda_content_width', 640 );
}
add_action( 'after_setup_theme', 'smiling_barracuda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smiling_barracuda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'smiling-barracuda' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'smiling-barracuda' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'smiling_barracuda_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function smiling_barracuda_scripts() {
	wp_enqueue_style( 'smiling-barracuda-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover-min.css');
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/style-min.css');
	wp_enqueue_style( 'blue', get_template_directory_uri() . '/css/blue.css');
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null,true );
	wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array('jquery'), null, true );
	wp_enqueue_script( 'smiling-barracuda-script', get_template_directory_uri() . '/js/script-min.js', array('jquery'), null, true );
	wp_enqueue_script( 'smiling-barracuda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'smiling-barracuda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smiling_barracuda_scripts' );

/**
 * Disable WordPress Events and News widget from the dashboard.
 *
 * @since 1.0
 */
function barracuda_remove() {
	remove_meta_box( 'dashboard_primary', get_current_screen(), 'side' );
}
add_action( 'wp_network_dashboard_setup', 'barracuda_remove', 20 );
add_action( 'wp_user_dashboard_setup',    'barracuda_remove', 20 );
add_action( 'wp_dashboard_setup',         'barracuda_remove', 20 );

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

/**
 * Shortcode Options
*/
if ( !function_exists( 'smiling_barracuda_shortcode_options' ) && defined('FW')) :
    function smiling_barracuda_shortcode_options($data,$shortcode){
        $atts = shortcode_parse_atts( $data['atts_string'] );
        if( is_array($atts) ) :
            $atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
        endif;
        return $atts;
    }
endif;

/**
 * Minify output
 */
if ( ! function_exists( 'smiling_barracuda_compress' ) ) :
	function smiling_barracuda_compress($buf){
        return preg_replace(array('/<!--(.*)-->/Uis',"/[[:blank:]]+/"),array('',' '),str_replace(array("\n","\r","\t"),'',$buf));
	}
endif;

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="scroll" ', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );
/**
* Change the Login Logo
*/
function my_login_logo() { ?>
    <style type="text/css">
        #login{padding: 1% 0 0!important;}
        
        #login h1 a, 
        .login h1 a {
            background-image: url('<?php echo get_template_directory_uri()?>/images/barracuda-logo-full.png');
            width: auto;
            height: 140px;
            background-size: contain;
            background-position: center center;
        }
        #login h1 a:focus,
        .login h1 a:focus{
	        outline: 0;
	        box-shadow: none;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );