<?php
if (function_exists ( 'register_sidebar' ))
	register_sidebar ( array (
			'before_widget' => '<div class="widgets">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
			'before_link' => '<a>',
			'after_link' => '</a>' 
	) );



add_theme_support ( 'post-thumbnails' );


 function custom_theme_setup() {
    add_theme_support( 'advanced-image-compression' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');



add_theme_support('html5',array('search-form'));



?>