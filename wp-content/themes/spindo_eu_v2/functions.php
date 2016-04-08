<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
		
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'english-menu' => __( 'English Menu' ),
		  'estonian-menu' => __( 'Estonian Menu' ),
		  'lithuanian-menu' => __( 'Lithuanian Menu' ),
		  'latvian-menu' => __( 'Latvian Menu' ),
		  'russian-menu' => __( 'Russian Menu' ),
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );

// Custom Meta for pages
add_action( 'add_meta_boxes', 'custom_menu_func' );
function custom_menu_func()
{                                      // --- Parameters: ---
    add_meta_box( 'custom_menu_id1', // ID attribute of metabox
                  'Header Menu Language',       // Title of metabox visible to user
                  'custom_menu_id1', // Function that prints box in wp-admin
                  'page',              // Show box for posts, pages, custom, etc.
                  'normal',            // Where on the page to show the box
                  'high' );            // Priority of box in display order
}

function custom_menu_id1() {
	global $post;
	$custom = get_post_custom($post->ID);
  	$selected = $custom["custom_menu_lang1"][0];
	
	?>
    <label for="custom_menu_lang1">Enter menu language: <br /></label>
   
    <select name="custom_menu_lang1" id="custom_menu_lang1">
   		<option value="english-menu" <?php selected( $selected, 'english-menu' ); ?>> --- SELECT --- </option>
    	<option value="english-menu" <?php selected( $selected, 'english-menu' ); ?>> English </option>
        <option value="estonian-menu" <?php selected( $selected, 'estonian-menu' ); ?>> Estonian </option>
        <option value="russian-menu" <?php selected( $selected, 'russian-menu' ); ?>> Russian </option>
        <option value="lithuanian-menu" <?php selected( $selected, 'lithuanian-menu' ); ?>> Lithuanian </option>
        <option value="latvian-menu" <?php selected( $selected, 'latvian-menu' ); ?>> Latvian </option>
    </select><br />
    
    <?php
}

add_action( 'save_post', 'custom_menu_save' );
function custom_menu_save()
{
	global $post;
	
	if( isset( $_POST['custom_menu_lang1'] ) )
			update_post_meta( $post->ID, 'custom_menu_lang1', $_POST['custom_menu_lang1'] );
}



?>