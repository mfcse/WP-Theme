<?php
// Register Custom Post Type Service
function create_service_cpt()
{

	$labels = array(
		'name' => _x('Services', 'Post Type General Name', 'icthub'),
		'singular_name' => _x('Service', 'Post Type Singular Name', 'icthub'),
		'menu_name' => _x('Services', 'Admin Menu text', 'icthub'),
		'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'icthub'),
		'archives' => __('Service Archives', 'icthub'),
		'attributes' => __('Service Attributes', 'icthub'),
		'parent_item_colon' => __('Parent Service:', 'icthub'),
		'all_items' => __('All Services', 'icthub'),
		'add_new_item' => __('Add New Service', 'icthub'),
		'add_new' => __('Add New', 'icthub'),
		'new_item' => __('New Service', 'icthub'),
		'edit_item' => __('Edit Service', 'icthub'),
		'update_item' => __('Update Service', 'icthub'),
		'view_item' => __('View Service', 'icthub'),
		'view_items' => __('View Services', 'icthub'),
		'search_items' => __('Search Service', 'icthub'),
		'not_found' => __('Not found', 'icthub'),
		'not_found_in_trash' => __('Not found in Trash', 'icthub'),
		'featured_image' => __('Featured Image', 'icthub'),
		'set_featured_image' => __('Set featured image', 'icthub'),
		'remove_featured_image' => __('Remove featured image', 'icthub'),
		'use_featured_image' => __('Use as featured image', 'icthub'),
		'insert_into_item' => __('Insert into Service', 'icthub'),
		'uploaded_to_this_item' => __('Uploaded to this Service', 'icthub'),
		'items_list' => __('Services list', 'icthub'),
		'items_list_navigation' => __('Services list navigation', 'icthub'),
		'filter_items_list' => __('Filter Services list', 'icthub'),
	);
	$args = array(
		'label' => __('Service', 'icthub'),
		'description' => __('', 'icthub'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-page',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type('service', $args);
}
add_action('init', 'create_service_cpt', 0);
//css and scripts
function load_stylesheet()
{
	// fontawesome


	wp_register_style('font1', 'https://fonts.googleapis.com/css?family=Lato|Patua+One&display=swap');
	wp_enqueue_style('font1');
	wp_register_style('font2', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap');
	wp_enqueue_style('font2');

	wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), microtime(), 'all');
	wp_enqueue_style('style');
	wp_register_style('message', get_template_directory_uri() . '/css/contact-message.css', array(), 1, 'all');
	wp_enqueue_style('message');

	wp_register_style('testimonial', get_template_directory_uri() . '/css/testimonial.css', array(), 1, 'all');
	wp_enqueue_style('testimonial');


	wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
	wp_enqueue_style('responsive');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_scripts()
{

	wp_enqueue_script('font-aw', 'https://kit.fontawesome.com/46238e9440.js');
	wp_enqueue_script('jquery');


	//  wp_enqueue_script('font-aw','https://kit.fontawesome.com/46238e9440.js" crossorigin="anonymous');
	wp_enqueue_script('slick', 'http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js');

	wp_enqueue_script('swiper', 'http://malsup.github.com/jquery.cycle2.js', array('jquery'));

	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/function.js', array('jquery'), microtime(), true);
	// wp_enqueue_script('scripts',get_theme_file_uri('/js/function.js'),array('jquery'),microtime(),true);

}
add_action('wp_enqueue_scripts', 'load_scripts');



function simple_theme_setup()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simple_theme_setup');

// function register_my_menus() {
//   register_nav_menus(
//     array(
//       'header-menu' => __( 'Header Menu' ),
//       'extra-menu' => __( 'Extra Menu' )
//     )
//   );
// }
// add_action( 'init', 'register_my_menus' );

// Create Shortcode set_color
// Shortcode: [set_color color="black"]
function create_setcolor_shortcode()
{
	ob_start();
	get_template_part('includes/latest', 'services');
	return ob_get_clean();
}
add_shortcode('set_color', 'create_setcolor_shortcode');