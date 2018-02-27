<?php
/**
 * Fictional Broccoli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*------------------------------------*\
    Setup Theme
\*------------------------------------*/

// Set the content width in pixels based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640;
}

/**
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

if ( ! function_exists( 'fictionalbroccoli_setup' ) ) :
  function fictionalbroccoli_setup () {

    // Make theme available for translation.
    load_theme_textdomain( 'fictionalbroccoli' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Custom image sizes
	  add_image_size( 'fictionalbroccoli-featured-image', 2000, 1200, true );
    add_image_size( 'fictionalbroccoli-thumbnail-avatar', 100, 100, true );
    
    // Set the default content width.
    $GLOBALS['content_width'] = 640;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
      array(
        'primary'    => __( 'Primary Menu', 'fictionalbroccoli' ),
        'social' => __( 'Social Links Menu', 'fictionalbroccoli' ),
      )
    );

    // Switch default core markup for search form, comment form, and comments to html5
    add_theme_support(
      'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );
    
    // Enable support for Post Formats (https://codex.wordpress.org/Post_Formats)
    add_theme_support(
      'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
      )
    );

    // Set up the WordPress Theme logo feature.
    add_theme_support( 'custom-logo' );
    
    // Add theme support for selective refresh for widgets.
	  add_theme_support( 'customize-selective-refresh-widgets' );

  }
endif; // fictionalbroccoli_setup

add_action( 'after_setup_theme', 'fictionalbroccoli_setup' );

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

/*------------------------------------*\
    Functions
\*------------------------------------*/

/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

/*------------------------------------*\
    ShortCode Functions
\*------------------------------------*/

?>