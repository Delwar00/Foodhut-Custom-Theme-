<?php 

// foodhat theme support 
function foodhat_theme_support(){

    /**  thumbnail */
    add_theme_support( 'post-thumbnails' );

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );


    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** Remove widget block editor support **/
    remove_theme_support( 'widgets-block-editor' );

    /** refresh widget **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    // post formats
    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));
    //menu register
	register_nav_menus( array(
	    'header_left_side_menu' => __( 'Header Left Side Menu', 'foodhat' ),
	    'header_right_side_menu'  => __( 'Header Right Side Menu', 'foodhat' ),
	) );
}

add_action('after_setup_theme','foodhat_theme_support');

/**
 * Footer widget register
 */
function foodhat_widget() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget 01', 'foodhat' ),
		'id'            => 'footer-widget-01',
		'description'   => __( 'Footer widget are 01', 'foodhat' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 02', 'foodhat' ),
		'id'            => 'footer-widget-02',
		'description'   => __( 'Footer widget are 02', 'foodhat' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 03', 'foodhat' ),
		'id'            => 'footer-widget-03',
		'description'   => __( 'Footer widget are 03', 'foodhat' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 04', 'foodhat' ),
		'id'            => 'footer-widget-04',
		'description'   => __( 'Footer widget are 04', 'foodhat' ),
		'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer__widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'foodhat' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Blog Sidebar', 'foodhat' ),
		'before_widget' => '<div id="%1$s" class="sidebar__widget mb-40 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar__widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'foodhat_widget' );

//foodhat theme script includes
include_once('inc/common/scripts.php');
include_once('inc/common/comments-form-list.php');
//foodhat theme kirkiri includes
if ( class_exists( 'Kirki' ) ) {
	include_once('inc/kirki-customizer.php');
}
//foodhat theme template-parts includes
include_once('inc/template-function.php');
//foodhat theme nav walker menu includes
include_once('inc/nav-walker.php');
//foodhat theme breadcrumb
include_once('inc/breadcrumb.php');
//foodhat latest post widget
include_once('inc/sidebar-rc-post-widget.php');




