<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	
	add_filter('constant_contact_form_success', 'custom_constant_contact_success_message');
		function custom_constant_contact_success_message($success = '') {
		return '<h3>Thank you.</h3>';
	}
	if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 248, 216, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size( 'featured-image', 248, 216, false); //300 pixels wide (and unlimited height)
	}
	

	function register_my_menus() {
	  register_nav_menus(
	    array( 'header-menu' => __( 'Header Menu' ) )
	  );
	}
	add_action( 'init', 'register_my_menus' );
	
	// Add excerpt field to pages
	
	add_post_type_support( 'page', 'excerpt' );

?>