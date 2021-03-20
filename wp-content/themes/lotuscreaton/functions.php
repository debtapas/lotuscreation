<?php 
include( get_template_directory() . '/inc/enqueue.php' );
include( get_template_directory() . '/inc/support.php' );
include( get_template_directory() . '/inc/theme-support.php' );

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
    ) );

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

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'about',
            'title'             => __('about'),
            'description'       => __('A custom about block.'),
            'render_template'   => 'template-parts/blocks/about.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'about', 'quote' ),
        ));
    }
}
add_action('acf/init', 'lotus_init_block_types');