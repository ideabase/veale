<?php




add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 100 );
function theme_enqueue_styles() {
	 wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}



function veale_name_scripts() {
	wp_enqueue_style( 'veale-custom-styles', get_stylesheet_directory_uri() . '/veale-custom-styles.css' );
}

add_action( 'wp_enqueue_scripts', 'veale_name_scripts', 50000000 );


?>
