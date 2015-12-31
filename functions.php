<?php
function vuhello_script_enqueue(){
	wp_enqueue_style( 'customstylecss', get_template_directory_uri() . '/css/foundation.css', false, '1.0', 'all');
	wp_enqueue_script( 'customjsjs', get_template_directory_uri() . '/js/foundation.min.js', array( 'jquery' ), '1.0', true);
	
}
add_action('wp_enqueue_scripts', 'vuhello_script_enqueue');

$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'   => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/img/wsu.jpg',
);
add_theme_support( 'custom-header', $args );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

