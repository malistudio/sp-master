<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load custom fonts
    wp_enqueue_style('googleFonts-Oswald', 'https://fonts.googleapis.com/css?family=Oswald:700&subset=latin-ext');
    wp_enqueue_style('googleFonts-NotoSans', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=latin-ext');

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

    // Adding essential jQuery in the footer
    wp_enqueue_script( 'jq-js', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array( 'jquery' ), '', true );

    // Adding waypoints
    wp_enqueue_script( 'waypoints-js', '//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array( 'jquery' ), '', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2.3', true );

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Adding sp-scripts and custom js files in the footer
    wp_enqueue_script( 'spsite-js', get_template_directory_uri() . '/assets/js/sp-scripts.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'typed-js', get_template_directory_uri() . '/assets/js/typed.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'typed-fireup-js', get_template_directory_uri() . '/assets/js/typed-fireup.js', array( 'jquery' ), '', true );
     wp_enqueue_script( 'count-up-js', get_template_directory_uri() . '/assets/js/count-up.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'scrollupbar-js', get_template_directory_uri() . '/assets/js/scrollupbar.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'stickyfooter-js', get_template_directory_uri() . '/assets/js/sticky-footer.min.js', array( 'jquery' ), '', true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

// Load Dashicons to Front-End
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
    wp_enqueue_style( 'dashicons' );
}
