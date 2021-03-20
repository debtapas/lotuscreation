<?php

// Theme Support ~~~~~~~~~~~~~~~
function add_widget(){
	register_sidebar(
		array(
			'name'			=>	__('Address widget', 'lotus_sidebar_address'),
			'id'			=>	'address-widget',
			'description'	=>	__('This widget used for address and social media links'),
			//'class'			=>	'widget widget-text',
			'before_widget'	=>	'<div class="widget widget-text">',
			'after_widget'	=>	'</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'	=>	'</h5>'
	));
}
add_action('widgets_init', 'add_widget');