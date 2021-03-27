<?php

//Register Nav Menu ~~~~~~~~~~~~~~~~~
function reg_navigation(){	
	register_nav_menus(
		array(
		//Header menu ~~~~~~~~~~~~~~~
		'header-menu'	=>	'Primary Menu',

		//Footer menu ~~~~~~~~~~~~~~~~~
		'footer-menu'	=>	'Footer Menu'
	));	
}
add_action('init', 'reg_navigation');


//Custom Post of Service (Show on home page)
function lotus_service(){
    $labels = array(
        'name'                  => _x( 'Service', 'Post type general name', 'Service' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'Service' ),
        'menu_name'             => _x( 'Service', 'Admin Menu text', 'Service' ),
        'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'Service' ),
        'add_new'               => __( 'Add New', 'Service' ),
        'add_new_item'          => __( 'Add New Service', 'Service' ),
        'new_item'              => __( 'New Service', 'Service' ),
        'edit_item'             => __( 'Edit Service', 'Service' ),
        'view_item'             => __( 'View Service', 'Service' ),
        'all_items'             => __( 'All Service', 'Service' ),
        'search_items'          => __( 'Search Service', 'Service' ),
        'parent_item_colon'     => __( 'Parent Service:', 'Service' ),
        'not_found'             => __( 'No Service found.', 'Service' ),
        'not_found_in_trash'    => __( 'No Service found in Trash.', 'Service' ),
        'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Service' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Service' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Service' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Service' ),
        'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Service' ),
        'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Service' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Service' ),
        'filter_items_list'     => _x( 'Filter Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Service' ),
        'items_list_navigation' => _x( 'Service list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Service' ),
        'items_list'            => _x( 'Service list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Service' ),
    );
    
    $arg = array(
        'labels'             => $labels,
        'description'        => 'Service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'service', $arg );
}
add_action('init', 'lotus_service');

//Custom Post of Expertise (Show on Home page)
function lotus_expertise(){
    $labels = array(
        'name'                  => _x( 'Expertise', 'Post type general name', 'Service' ),
        'singular_name'         => _x( 'Expertise', 'Post type singular name', 'Service' ),
        'menu_name'             => _x( 'Expertise', 'Admin Menu text', 'Service' ),
        'name_admin_bar'        => _x( 'Expertise', 'Add New on Toolbar', 'Expertise' ),
        'add_new'               => __( 'Add New', 'Expertise' ),
        'add_new_item'          => __( 'Add New Expertise', 'Expertise' ),
        'new_item'              => __( 'New Expertise', 'Expertise' ),
        'edit_item'             => __( 'Edit Expertise', 'Expertise' ),
        'view_item'             => __( 'View Expertise', 'Expertise' ),
        'all_items'             => __( 'All Expertise', 'Expertise' ),
        'search_items'          => __( 'Search Expertise', 'Expertise' ),
        'parent_item_colon'     => __( 'Parent Expertise:', 'Expertise' ),
        'not_found'             => __( 'No Expertise found.', 'Expertise' ),
        'not_found_in_trash'    => __( 'No Expertise found in Trash.', 'Expertise' ),
        'featured_image'        => _x( 'Expertise Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Expertise' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Expertise' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Expertise' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Expertise' ),
        'archives'              => _x( 'Expertise archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Expertise' ),
        'insert_into_item'      => _x( 'Insert into Expertise', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Expertise' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Expertise', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Expertise' ),
        'filter_items_list'     => _x( 'Filter Expertise list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Expertise' ),
        'items_list_navigation' => _x( 'Expertise list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Expertise' ),
        'items_list'            => _x( 'Expertise list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Expertise' ),
    );
    
    $arg = array(
        'labels'             => $labels,
        'description'        => 'Expertise custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Expertise' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'Expertise', $arg );
}
add_action('init', 'lotus_expertise');

//Register Choose us custom post (Home page) ~~~~~~~~~~~~~~~~~~~~~
function lotus_choose_us(){
    $labels = array(
        'name'                  => _x( 'Choose', 'Post type general name', 'Service' ),
        'singular_name'         => _x( 'Choose', 'Post type singular name', 'Service' ),
        'menu_name'             => _x( 'Choose', 'Admin Menu text', 'Service' ),
        'name_admin_bar'        => _x( 'Choose', 'Add New on Toolbar', 'Choose' ),
        'add_new'               => __( 'Add New', 'Choose' ),
        'add_new_item'          => __( 'Add New Choose', 'Choose' ),
        'new_item'              => __( 'New Choose', 'Choose' ),
        'edit_item'             => __( 'Edit Choose', 'Choose' ),
        'view_item'             => __( 'View Choose', 'Choose' ),
        'all_items'             => __( 'All Choose', 'Choose' ),
        'search_items'          => __( 'Search Choose', 'Choose' ),
        'parent_item_colon'     => __( 'Parent Choose:', 'Choose' ),
        'not_found'             => __( 'No Choose found.', 'Choose' ),
        'not_found_in_trash'    => __( 'No Choose found in Trash.', 'Choose' ),
        'featured_image'        => _x( 'Choose Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Choose' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Choose' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Choose' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Choose' ),
        'archives'              => _x( 'Choose archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Choose' ),
        'insert_into_item'      => _x( 'Insert into Choose', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Choose' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Choose', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Choose' ),
        'filter_items_list'     => _x( 'Filter Choose list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Choose' ),
        'items_list_navigation' => _x( 'Choose list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Choose' ),
        'items_list'            => _x( 'Choose list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Choose' ),
    );
    
    $arg = array(
        'labels'             => $labels,
        'description'        => 'Choose custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Choose' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'Choose', $arg );
}
add_action('init', 'lotus_choose_us');

//Customize color palette of gutenberg ~~~~~~~~~~~~
function lotus_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_attr__( 'purple', 'themeLangDomain' ),
            'slug' => 'purple',
            'color' => '#8c3b8c',
        ),
        array(
            'name' => esc_attr__( 'violet', 'themeLangDomain' ),
            'slug' => 'violet',
            'color' => '#e02566',
        ),
        array(
            'name' => esc_attr__( 'black', 'themeLangDomain' ),
            'slug' => 'black',
            'color' => '#24182e',
        ),
        array(
            'name' => esc_attr__( 'white', 'themeLangDomain' ),
            'slug' => 'white',
            'color' => '#fff',
        ),
        array(
            'name' => esc_attr__( 'light blue', 'themeLangDomain' ),
            'slug' => 'light-blue',
            'color' => '#e6f8f9',
        ),
        array(
            'name' => esc_attr__( 'deep brown', 'themeLangDomain' ),
            'slug' => 'deep-brown',
            'color' => '#24182e',
        )
    ));

//Customize font size of gutenberg ~~~~~~~~~~~~
  add_theme_support( 'editor-font-sizes', array(
	    array(
	        'name' => esc_attr__( '30px', 'themeLangDomain' ),
	        'size' => 30,
	        'slug' => '30px'
	    ),
	    array(
	        'name' => esc_attr__( '50px', 'themeLangDomain' ),
	        'size' => 50,
	        'slug' => '50px'
	    ),
	    array(
	        'name' => esc_attr__( '24px', 'themeLangDomain' ),
	        'size' => 24,
	        'slug' => '24px'
	    ),
	    array(
	        'name' => esc_attr__( '18px', 'themeLangDomain' ),
	        'size' => 18,
	        'slug' => '18px'
	    ),
	    array(
	        'name' => esc_attr__( '20px', 'themeLangDomain' ),
	        'size' => 20,
	        'slug' => '20px'
	    )
	));
}
add_action( 'after_setup_theme', 'lotus_theme_supported_features' );


//Register a Block to Gutenberg by ACF ~~~~~~~~~~
//https://www.advancedcustomfields.com/resources/blocks/

function lotus_init_block_types() {
    // Register a vission block in Gutenberg ~~~~~~~~~~
        acf_register_block_type(array(
            'name'              => 'about',
            'title'             => __('vission'),
            'description'       => __('A custom about block.'),
            'render_template'   => 'template-parts/blocks/vission.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'vission', 'quote' ),
        ));

    // Register a expertise block in Gutenberg ~~~~~~~~~~
        acf_register_block_type(array(
            'name'              => 'expertise',
            'title'             => __('expertise'),
            'description'       => __('A expertise customer block.'),
            'render_template'   => 'template-parts/blocks/expertise.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'expertise', 'quote' ),
        ));

    // Register a service block in Gutenberg ~~~~~~~~~~
        acf_register_block_type(array(
            'name'              => 'service',
            'title'             => __('service'),
            'description'       => __('A service customer block.'),
            'render_template'   => 'template-parts/blocks/service.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'service', 'quote' ),
        ));
    // Register Why Choose us block in Gutenberg ~~~~~~~~~~
        acf_register_block_type(array(
            'name'              => 'Choose us',
            'title'             => __('Choose us'),
            'description'       => __('A service customer block.'),
            'render_template'   => 'template-parts/blocks/choose_us.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'choose_us', 'quote' ),
        ));
    
    // Register Our Clients block in Gutenberg ~~~~~~~~~~
        acf_register_block_type(array(
            'name'              => 'Our Clients',
            'title'             => __('Our Clients'),
            'description'       => __('A service customer block.'),
            'render_template'   => 'template-parts/blocks/our_clients.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'our_clients', 'quote' ),
        ));

    // Register Blog section block in Gutenberg ~~~~~~~~~~
        acf_register_block_type(array(
            'name'              => 'Blog',
            'title'             => __('Blog'),
            'description'       => __('A Blog Section.'),
            'render_template'   => 'template-parts/blocks/blog.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'blog', 'quote' ),
        ));
}
// Check function exists.
    if( function_exists('acf_register_block_type') ) {
       add_action('acf/init', 'lotus_init_block_types');
    }


//Register a Options Page by ACF ~~~~~~~~~~
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Top Bar Settings',
        'menu_title'    => 'Top Bar',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}