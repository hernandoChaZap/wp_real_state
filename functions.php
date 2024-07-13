<?php
/**
 * under vite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package under_vite
 */

if( !defined( '_S_VERSION' ) ) define( '_S_VERSION', '1.0.0' );
if( !defined( 'UNDER_VITE_DEV' ) ) define( 'UNDER_VITE_DEV', true );
if( !defined( 'UNDER_VITE_URI' ) ) define( 'UNDER_VITE_URI', get_theme_file_path() );
if( !defined( 'UNDER_VITE_PATH' ) ) define( 'UNDER_VITE_PATH', get_theme_file_uri() );
const URL_ASSETS = UNDER_VITE_DEV ? 'http://localhost:5173/src' : UNDER_VITE_URI . '/dist';



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function under_vite_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on under vite, use a find and replace
		* to change 'under-vite' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'under-vite', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'under-vite' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'under_vite_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'under_vite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function under_vite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'under_vite_content_width', 640 );
}
add_action( 'after_setup_theme', 'under_vite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function under_vite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'under-vite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'under-vite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'under_vite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function under_vite_scripts() {
	wp_enqueue_style( 'under-vite-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'under-vite-style', 'rtl', 'replace' );

	wp_enqueue_script( 'under-vite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/abf5dd1b08.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	if( UNDER_VITE_DEV ): 
		wp_enqueue_script( 'vite-reload', 'http://localhost:5173/@vite/client', [], null, false );
		wp_enqueue_style( 'custom', URL_ASSETS . '/css/custom.scss', [], '1.0', 'all' );
	endif;
	wp_enqueue_script( 'scripts', URL_ASSETS . '/js/scripts.js', [], '1.0', true );
	wp_enqueue_style( 'custom', URL_ASSETS . '/css/custom.css' , [], '1.0', 'all' );
	
}
add_action( 'wp_enqueue_scripts', 'under_vite_scripts' );




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
 * Add custom classes to different menu levels
 *
 * @param [type] $items
 * @return void
 */
function under_vite_custom_clases_menu_items( $items )
{
	foreach( $items as &$item ):
		if( $item->menu_item_parent != 0 ):
			$item->classes[] = 'second-level-item';

			foreach( $items as $parent ):
				if( $parent->ID == $item->menu_item_parent ):
					if( $parent->menu_item_parent != 0 ):
						$item->classes[] = 'third-level-item';
						break;
					endif;
				endif;
			endforeach;
			
		endif;
	endforeach;

	return $items;
}
add_filter( 'wp_nav_menu_objects', 'under_vite_custom_clases_menu_items' );


/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) :

	function fa_custom_setup_kit($kit_url = '') 
	{
		$fontawesome = [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ];
		foreach ( $fontawesome as $action ) :
			add_action(
				$action,
				function () use ( $kit_url ) 
				{
					wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
				}
			);
		endforeach;
	}
	
endif;
fa_custom_setup_kit('https://kit.fontawesome.com/abf5dd1b08.js');

/**
 * Add type modules to scripts
 *
 * @param [type] $tag
 * @param [type] $handle
 * @return void
 */
function under_vite_script_loader( $tag, $handle  ) 
{
	if( $handle === 'vite-reload' || $handle === 'scripts' ){
		return str_replace( ' src', ' type="module" src', $tag );		
	}
	return $tag;
}
add_action( 'script_loader_tag', 'under_vite_script_loader', 10, 2 );

/**
 * Let upload svg
 *
 * @param array $mimes
 * @return void
 */
function under_vite_ad_support_svg( array $mimes )
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'under_vite_ad_support_svg' );

function under_vite_show_time_since_publication( $the_date, $d)
{
	$post_date       = get_post_time('U');
	$current_time    = current_time('timestamp');
	$human_time_diff = human_time_diff( $post_date, $current_time );
	$human_time_diff_spanish = under_vite_translate_time_diff($human_time_diff);

	return sprintf(
		__('hace %s', 'text-domain'),
		$human_time_diff_spanish
	);
}
add_filter( 'get_the_date', 'under_vite_show_time_since_publication', 10, 3 );
function under_vite_translate_time_diff($time_diff) {
    // Reemplazar palabras en inglés por español
    $time_diff = str_replace('mins', 'minutos', $time_diff);
    $time_diff = str_replace('min', 'minuto', $time_diff);
    $time_diff = str_replace('hours', 'horas', $time_diff);
    $time_diff = str_replace('hour', 'hora', $time_diff);
    $time_diff = str_replace('days', 'días', $time_diff);
    $time_diff = str_replace('day', 'día', $time_diff);
    $time_diff = str_replace('weeks', 'semanas', $time_diff);
    $time_diff = str_replace('week', 'semana', $time_diff);
    $time_diff = str_replace('months', 'meses', $time_diff);
    $time_diff = str_replace('month', 'mes', $time_diff);
    $time_diff = str_replace('years', 'años', $time_diff);
    $time_diff = str_replace('year', 'año', $time_diff);

    return $time_diff;
}
