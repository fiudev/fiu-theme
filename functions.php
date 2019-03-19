<?php
/**
 * SCIS Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SCIS_Two
 */

if (!function_exists('scis_two_setup')): /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
  function scis_two_setup()
  {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SCIS Two, use a find and replace
		 * to change 'scis_two' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('scis_two', get_template_directory() . '/languages');

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
      'menu-1' => esc_html__('Primary', 'scis_two'),
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
    add_theme_support('custom-background', apply_filters('scis_two_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
    add_theme_support('custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ));
  }
endif;
add_action('after_setup_theme', 'scis_two_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scis_two_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('scis_two_content_width', 640);
}
add_action('after_setup_theme', 'scis_two_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scis_two_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'scis_two'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'scis_two'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'scis_two_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function scis_two_scripts()
{
  /**
	 * CSS Files
	 */
  // Main Style Sheet
  wp_enqueue_style('scis_two-style', get_stylesheet_uri());

  // Zurb Foundation 5.5.3
  wp_enqueue_style('foundation-style', get_template_directory_uri() . '/css/foundation.min.css', 'scis_two-style', '5.5.3', 'all');

  // Slick Slider 1.8.1
  wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', 'scis_two-style', '1.8.1', 'all');

  // Slick Slider Theme 1.8.1
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css', 'slick', '1.8.1', 'all');
    // DIGICDN
    wp_enqueue_style('case-style', get_template_directory_uri() . '/css/digicdn.css' , 'scis_two-style');

  /**
	 * JS Files
	 */

  wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/modernizr.js', array(), '2.8.3', false);

  wp_enqueue_script('fastclick', get_template_directory_uri() . '/js/fastclick.js', array(), '1.0', true);

  wp_enqueue_script('placeholder', get_template_directory_uri() . '/js/placeholder.js', array('jquery'), '2.0.9', true);

  wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery', 'fastclick'), '1.4.1', true);

  wp_enqueue_script('foundation-script', get_template_directory_uri() . '/js/foundation.min.js', array('jquery', 'fastclick', 'placeholder', 'jquery-cookie'), '5.5.3', true);

  wp_enqueue_script('slick-script', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.8.1', true);
  // Font Awesome CSS
  wp_enqueue_style('scis-font-awesome-min-style', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css', array('scis_two-style'), null, 'all'); 

  wp_enqueue_script('scis_two-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

  wp_enqueue_script('scis_two-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

  // Digi CDN Script
  wp_enqueue_script('digi-cdn-core', get_template_directory_uri() . '/js/digi-cdn-core.js', array('jquery'), '2.0.9', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'scis_two_scripts');

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
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}


// Navigation Bar Links Walker
class Custom_Walker_Nav_Menu_top extends Walker_Nav_Menu
{
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $is_current_item = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_item = ' class="current"';
        }
        echo '<li'.$is_current_item.'><a href="'.$item->url.'"><span>'.$item->title.'</span>';
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        echo '</a></li>';
    }
}

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
      echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
      the_category(' &bull; ');
          if (is_single()) {
              echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
              the_title();
          }
  } elseif (is_page()) {
      echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
      echo the_title();
  } elseif (is_search()) {
      echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
      echo '"<em>';
      echo the_search_query();
      echo '</em>"';
  }
}

// Kirki theme config
Kirki::add_config('my_theme_config', array(
  'capability' => 'edit_theme_options',
  'option_type' => 'theme_mod'
));

// Content Settings panel
Kirki::add_panel('site_settings', array(
  'priority' => 10,
  'title' => esc_attr__( 'Content Settings', 'kirki'),
));

// Home main Text
Kirki::add_section('home_main_info', array(
  'title' => esc_attr__( 'Home content', 'kirki'),
  'panel' => 'site_settings',
  'priority' => 10
));

// Main Title
Kirki::add_field('my_theme_config', array(
  'type' => 'text',
  'settings' => 'home_title_main_section',
  'label' => __('Home title text', 'kirki'),
  'section' => 'home_main_info',
  'default' => esc_attr__('School of Computing and Information Sciences', 'kirki'),
  'priority' => 10,
));

// Main text
Kirki::add_field('my_theme_config', array(
  'type' => 'editor',
  'settings' => 'home_text_main_section',
  'label' => __('Home main text', 'kirki'),
  'section' => 'home_main_info',
  'priority' => 10,
  'default' => esc_attr__('The School of Computing and Information Sciences was formed in 1987 from the former Department of Mathematical Sciences. The mission of the School has several dimensions, consistent with the overall mission of the University and consistent with its role as part of the College of Engineering and Computing.', 'kirki'),
));

// Sub title
Kirki::add_field('my_theme_config', array(
  'type' => 'text',
  'settings' => 'home_title_sub_section',
  'label' => __('Home sub title', 'kirki'),
  'section' => 'home_main_info',
  'default' => esc_attr__('Creating Florida\'s next generation of computing professionals', 'kirki'),
  'priority' => 10,
));

// Sub Text
Kirki::add_field('my_theme_config', array(
  'type' => 'editor',
  'settings' => 'home_text_sub_section',
  'label' => __('Home sub text', 'kirki'),
  'section' => 'home_main_info',
  'priority' => 10,
  'default' => esc_attr__('Our programs prepare students for either continued graduate education or for careers in business, industry, or government. Further, our programs include a mix and balance of application-oriented course work and study of the underlying theory and principles.', 'kirki'),
));


// Home POP(points of pride) Three column section
Kirki::add_section('home_pop_section', array(
  'title' => esc_attr__( 'Home Points of Pride', 'kirki'),
  'panel' => 'site_settings',
  'priority' => 10
));

// POP Image One
Kirki::add_field('my_theme_config', array(
  'type' => 'image',
  'settings' => 'home_pop_image_one',
  'label' => __('Image 1', 'kirki'),
  'section' => 'home_pop_section',
  'default' => 'https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg',
  'priority' => 10,
));

// POP Text One
Kirki::add_field('my_theme_config', array(
  'type' => 'text',
  'settings' => 'home_pop_text_one',
  'label' => __('Text 1', 'kirki'),
  'section' => 'home_pop_section',
  'default' => esc_attr__('Title 1', 'kirki'),
  'priority' => 10,
));

// POP Image Two
Kirki::add_field('my_theme_config', array(
  'type' => 'image',
  'settings' => 'home_pop_image_two',
  'label' => __('Image 2', 'kirki'),
  'section' => 'home_pop_section',
  'default' => 'https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg',
  'priority' => 10,
));

// POP Text Two
Kirki::add_field('my_theme_config', array(
  'type' => 'text',
  'settings' => 'home_pop_text_two',
  'label' => __('Text 2', 'kirki'),
  'section' => 'home_pop_section',
  'default' => esc_attr__('Title 2', 'kirki'),
  'priority' => 10,
));

// POP Image Three
Kirki::add_field('my_theme_config', array(
  'type' => 'image',
  'settings' => 'home_pop_image_three',
  'label' => __('Image 3', 'kirki'),
  'section' => 'home_pop_section',
  'default' => 'https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg',
  'priority' => 10,
));

// POP Text Three
Kirki::add_field('my_theme_config', array(
  'type' => 'text',
  'settings' => 'home_pop_text_three',
  'label' => __('Text 3', 'kirki'),
  'section' => 'home_pop_section',
  'default' => esc_attr__('Title 3', 'kirki'),
  'priority' => 10,
));

// BG Color
// Kirki::add_panel('my_colors', array(
//   'priority' => 10, // order for customizer
//   'title' => esc_attr__('My Colors', 'kirki'),
//   'description' => esc_attr('My Colors description', 'kirki')
// ));

// Kirki::add_section('nav_settings', array(
//   'title' => esc_attr__('Navigation Settings', 'kirki'),
//   'description' => esc_attr__('Navigation Settings description', 'kirki'),
//   'panel' => 'my_colors',
//   'priority' => 10
// ));

// Kirki::add_field('my_theme_config', array(
//   'type' => 'color', // type of control
//   'settings' => 'nav_bg_color', // id to call in php/html
//   'label' => __('Navigation Background', 'kirki'),
//   'section' => 'nav_settings',
//   'default' => '#fff',
//   'output' => array (
//     array (
//       'element' => '.global-header',
//       'property' => 'background-color'
//     ),
//   )
// ));