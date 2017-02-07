<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

/*shortcode test*/
/*add_shortcode( 'sayHello', 'sayHelloFunction' );

function sayHelloFunction() {
    echo '<h1>Hello!!</h1>';
}*/


// Top Carousel Shortcode
function top_carousel() {
    echo include ('carouseltop.php');
}
add_shortcode( 'top_carousel', 'top_carousel' );


// Contact Us Form Shortcode
function contact_us() {
    echo include ('contactus.php');
}
add_shortcode( 'contact_us', 'contacts_us' );



/* My Custom Posts Setup */

/* Function for Thumbnail Rows CPT */

function custom_post_type_carousels() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Carousels', 'Post Type General Name' ),
        'singular_name'       => _x( 'Carousel', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Carousels' ),
        'parent_item_colon'   => __( 'Parent Carousels' ),
        'all_items'           => __( 'All Carousels' ),
        'view_item'           => __( 'View Carousel' ),
        'add_new_item'        => __( 'Add New Carousel' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit Carousel' ),
        'update_item'         => __( 'Update Carousel' ),
        'search_items'        => __( 'Search Carousel' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Carousels' ),
        'description'         => __( 'Carousels for use in Pages' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /*'taxonomies'          => array( 'genres' ),*/
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'Carousels', $args ); 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_carousels', 0 );






/* Function of Carousel CPT */

function custom_post_type_thumbnails() {

// Set UI labels for Custom Post Type
    $labels2 = array(
        'name'                => _x( 'Thumbnail Rows', 'Post Type General Name' ),
        'singular_name'       => _x( 'Thumbnail Row', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Thumbnail Rows' ),
        'parent_item_colon'   => __( 'Parent Thumbnail Rows' ),
        'all_items'           => __( 'All Thumbnail Rows' ),
        'view_item'           => __( 'View Thumbnail Row' ),
        'add_new_item'        => __( 'Add New Thumbnail Row' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit Movie' ),
        'update_item'         => __( 'Update Thumbnail Row' ),
        'search_items'        => __( 'Search Thumbnail Row' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'Thumbnail Rows' ),
        'description'         => __( 'Thumbnail Rows for use in Pages' ),
        'labels'              => $labels2,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /*'taxonomies'          => array( 'genres' ),*/
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'Thumbnails', $args ); 
}

 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_thumbnails', 0 );




/* Function of ACF Forms CPT */

function custom_post_type_acfforms() {

// Set UI labels for Custom Post Type
    $labels3 = array(
        'name'                => _x( 'ACF Forms', 'Post Type General Name' ),
        'singular_name'       => _x( 'ACF Form', 'Post Type Singular Name' ),
        'menu_name'           => __( 'ACF Forms' ),
        'parent_item_colon'   => __( 'Parent ACF Forms' ),
        'all_items'           => __( 'All ACF Forms' ),
        'view_item'           => __( 'View ACF Form' ),
        'add_new_item'        => __( 'Add New ACF Form' ),
        'add_new'             => __( 'Add New' ),
        'edit_item'           => __( 'Edit ACF Forms' ),
        'update_item'         => __( 'Update ACF Forms' ),
        'search_items'        => __( 'Search ACF Forms' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'ACF Forms' ),
        'description'         => __( 'ACF Forms for use in Pages' ),
        'labels'              => $labels3,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        /*'taxonomies'          => array( 'genres' ),*/
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'ACF Forms', $args ); 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_acfforms', 0 );




/* For ACF Form */
add_action('acf/save_post', 'my_save_post');

function my_save_post( $post_id ) {
	
	// bail early if not a contact_form post
	if( get_post_type($post_id) !== 'contact_form' ) {
		
		return;
		
	}
	
	
	// bail early if editing in admin
	if( is_admin() ) {
		
		return;
		
	}
	
	
	// vars
	$post = get_post( $post_id );
	
	
	// get custom fields (field group exists for content_form)
	$name = get_field('name', $post_id);
	$email = get_field('email', $post_id);
	
	
	// email data
	$to = 'contact@website.com';
	$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$subject = $post->post_title;
	$body = $post->post_content;
	
	
	// send email
	wp_mail($to, $subject, $body, $headers );
	
}


?>