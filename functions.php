<?php


use WpTailwindCssThemeBoilerplate\AutoLoader;
use WpTailwindCssThemeBoilerplate\View;


/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
require get_stylesheet_directory() . '/inc/widgets.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'WpTailwindCssThemeBoilerplate', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';


// Activar para que los custom field se activen 
 //WordPress Custom Fields Missing When ACF is Active 
 add_filter('acf/settings/remove_wp_meta_box', '__return_false'); 


 //Activar para que Text area ACF acepte shortcode

function my_acf_format_value( $value, $post_id, $field ) { 
	// run do_shortcode on all textarea values
	$value = do_shortcode($value);  
	// return
	return $value;
} 
add_filter('acf/format_value/type=textarea', 'my_acf_format_value', 10, 3);

 
 
function events_endpoint() {
    register_rest_route( 'eventos/', 'destacados', array(  
        'methods'  => 'GET',
        'callback' => 'get_events',
    ));
}
add_action( 'rest_api_init', 'events_endpoint' );
 
 
function get_events(){
	// Set the arguments based on our get parameters
	$today = date('Ymd',strtotime('today'));
	$args = array (
		'post_type'     => 'mis_congresos',
		'posts_per_page'    => -1
	);
	// Run a custom query
	$meta_query = new WP_Query($args);
	if($meta_query->have_posts()) {
		//Define and empty array
		$i = 0;
		$data = array();
		// Store each post's data in the array
		while($meta_query->have_posts()) {
			$meta_query->the_post();
			$data[$i]['title']          =   get_the_title();
			$data[$i]['excerpt']        =   get_the_excerpt(); 
			$data[$i]['thumbnail']      =   get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
			$data[$i]['link']           =   get_the_permalink();
			$i++;
		}
		// Return the data
		return $data;
	}
}