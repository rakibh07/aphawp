<?php 
// Theme Basic Deafault option enable Functions
function alpha_theme_settings(){ // when write a function must be prefix with theme Text Domain
    load_theme_textdomain( "alpha"); // for translatable ready
    add_theme_support( "post-thumbnails" ); // loead feature image
    add_theme_support( "title-tags" ); // Title tags enable 
   
}
// WP Hook initialize for funtion call 
add_action( "after_setup_theme", "alpha_theme_settings" );


// WP Hook initialize for funtion call 
add_action( "wp_enqueue_script", "alpha_assets"  ) ;