<?php

//Add Feature image section on page and blog
add_theme_support( 'post-thumbnails' );


// Theme Support ~~~~~~~~~~~~~~~
function add_widget(){
	register_sidebar(
		array(
			'name'			=>	__('Address widget', 'lotus_address_sidebar'),
			'id'			=>	'address-widget',
			'description'	=>	__('This widget used for address and social media links'),
			//'class'			=>	'widget widget-text',
			'before_widget'	=>	'<div class="widget widget-text">',
			'after_widget'	=>	'</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'	=>	'</h5>'
		));

	register_sidebar(
		array(
			'name'			=>	__('About widget', 'lotus_about_sidebar'),
			'id'			=>	'about-widget',
			'description'	=>	__('This widget used for about section'),
			//'class'			=>	'widget widget-text',
			'before_widget'	=>	'<div class="widget widget-text widget-links">',
			'after_widget'	=>	'</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'	=>	'</h5>'
		));
}
add_action('widgets_init', 'add_widget');