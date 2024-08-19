<?php 

// foodhat css js enqueue 
function foodhat_add_theme_scripts() {
	
	wp_enqueue_style( 'foodhat-fonts', foodhat_fonts_url(), array(), '1.0.0', 'all' );
	wp_enqueue_style( 'themefy', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendors/animate/animate.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main-foodhut', get_template_directory_uri() . '/assets/css/foodhut.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . 'assets/vendors/bootstrap/bootstrap.bundle.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'bootstrap-affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array( ), '5.1.3', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array(  ), 1.0, true );
	wp_enqueue_script( 'foodhat-main', get_template_directory_uri() . '/assets/js/foodhut.js', array(  ), 1.1, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'foodhat_add_theme_scripts' );


/*
Register Fonts
 */
function foodhat_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'foodhat' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}