<?php
/**
 * Megan_tw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Megan_tw
 */

if (!defined('MEGAN_TW_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('MEGAN_TW_VERSION', '0.1.0');
}

if (!defined('MEGAN_TW_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `megan_tw_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'MEGAN_TW_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary prose-a:no-underline prose-li:my-0 prose-li:pl-4'
	);
}

if (!function_exists('megan_tw_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function megan_tw_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Megan_tw, use a find and replace
		 * to change 'megan_tw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain(
			'megan_tw',
			get_template_directory() . '/languages'
		);

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus([
			'menu-1' => __('Primary', 'megan_tw'),
			'menu-2' => __('Footer Menu', 'megan_tw'),
		]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'megan_tw_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function megan_tw_widgets_init()
{
	register_sidebar([
		'name' => __('Footer', 'megan_tw'),
		'id' => 'sidebar-1',
		'description' => __(
			'Add widgets here to appear in your footer.',
			'megan_tw'
		),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	]);
}
add_action('widgets_init', 'megan_tw_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function megan_tw_scripts()
{
	wp_enqueue_style(
		'megan_tw-style',
		get_stylesheet_uri(),
		[],
		MEGAN_TW_VERSION
	);
	wp_enqueue_script(
		'megan_tw-script',
		get_template_directory_uri() . '/js/script.min.js',
		[],
		MEGAN_TW_VERSION,
		true
	);

	// Enqueue Inter font
	// wp_enqueue_style(
	// 	'inter-font',
	// 	'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap',
	// 	[],
	// 	null
	// );
}
add_action('wp_enqueue_scripts', 'megan_tw_scripts');

function enqueue_custom_scripts()
{
	wp_enqueue_script(
		'intersection-observer',
		get_template_directory_uri() . '/js/intersection-observer.js',
		[],
		null,
		true
	);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

/**
 * Enqueue the block editor script.
 */
function megan_tw_enqueue_block_editor_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'megan_tw-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			['wp-blocks', 'wp-edit-post'],
			MEGAN_TW_VERSION,
			true
		);
		wp_add_inline_script(
			'megan_tw-editor',
			"tailwindTypographyClasses = '" .
				esc_attr(MEGAN_TW_TYPOGRAPHY_CLASSES) .
				"'.split(' ');",
			'before'
		);
	}
}
add_action('enqueue_block_assets', 'megan_tw_enqueue_block_editor_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function megan_tw_tinymce_add_class($settings)
{
	$settings['body_class'] = MEGAN_TW_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'megan_tw_tinymce_add_class');

/* 
	add code to get rid of errors that show before editor appears when creating a new page
*/

add_action('init', function () {
	if (!function_exists('stripos_safe')) {
		function stripos_safe($haystack, $needle)
		{
			$haystack = $haystack ?? '';
			return stripos($haystack, $needle);
		}
	}
});

add_action('init', function () {
	global $social_initial_state;
	if (!isset($social_initial_state)) {
		$social_initial_state = [];
	}
});

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Disable support for comments and trackbacks in post types
function megan_tw_disable_comments_post_types_support()
{
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'megan_tw_disable_comments_post_types_support');

// Close comments on the front-end
function megan_tw_disable_comments_status()
{
	return false;
}
add_filter('comments_open', 'megan_tw_disable_comments_status', 20, 2);
add_filter('pings_open', 'megan_tw_disable_comments_status', 20, 2);

// Hide existing comments
function megan_tw_disable_comments_hide_existing_comments($comments)
{
	$comments = [];
	return $comments;
}
add_filter(
	'comments_array',
	'megan_tw_disable_comments_hide_existing_comments',
	10,
	2
);

// Remove comments page in menu
function megan_tw_disable_comments_admin_menu()
{
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'megan_tw_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function megan_tw_disable_comments_admin_menu_redirect()
{
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url());
		exit();
	}
}
add_action('admin_init', 'megan_tw_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function megan_tw_disable_comments_dashboard()
{
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'megan_tw_disable_comments_dashboard');

// Remove comments links from admin bar
function megan_tw_disable_comments_admin_bar()
{
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'megan_tw_disable_comments_admin_bar');
