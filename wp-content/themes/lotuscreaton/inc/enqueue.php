<?php

// Enqueue styles and scripts =========================
//=====================================================


function lotus_scripts(){

	//Core Style Sheets ~~~~~~~~~~~
	wp_enqueue_style('master-css', get_template_directory_uri() . '/assets/css/master.css' );
	wp_enqueue_style('jquery-lightbox-css', get_template_directory_uri() . '/assets/css/jquery.lightbox.css' );
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style('custom-icons-min', get_template_directory_uri() . '/assets/css/custom-icons.min.css' );

	//Responsive Style Sheets
	wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

	//Revolution Style Sheets ~~~~~~~~~~~
	wp_enqueue_style('settings-css', get_template_directory_uri() . '/revolution/css/settings.css' );
	wp_enqueue_style('layers-css', get_template_directory_uri() . '/revolution/css/layers.css' );
	wp_enqueue_style('navigation-css', get_template_directory_uri() . '/revolution/css/navigation.css' );

	// Portfolio Gallery Style Sheets  ~~~~~~~~~~~
	wp_enqueue_style('style-css', get_template_directory_uri() . '/gallery/style.css');
	wp_enqueue_style('swipebox-css', get_template_directory_uri() . '/gallery/swipebox.css');

	//Portfolio Pagination Style Sheets  ~~~~~~~~~~~
	wp_enqueue_style('jquerysctipttop-css', 'http://www.jqueryscript.net/css/jquerysctipttop.css');
	wp_enqueue_style('jquery-paginate-css', get_template_directory_uri() . '/gallery/jquery.paginate.css');

	//Typewriter Addon  ~~~~~~~~~~~
	wp_enqueue_style('typewriter-css', get_template_directory_uri() . '/revolution/css/typewriter.css');

	//Theme style  ~~~~~~~~~~~
	wp_enqueue_style('style', get_stylesheet_uri() );

	
	//Javascript Plugins  ~~~~~~~~~~~
	wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '9.9', true);

	// Revolution js Files  ~~~~~~~~~~~
	wp_enqueue_script('jquery-themepunch-tools-min-js', get_template_directory_uri() . '/revolution/js/jquery.themepunch.tools.min.js', array(), '1.6.9', true);
	wp_enqueue_script('jquery-themepunch-revolution-min-js', get_template_directory_uri() . '/revolution/js/jquery.themepunch.revolution.min.js', array(), '25.4.7', true);
	wp_enqueue_script('revolution-extension-actions-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.actions.min.js', array(), '2.1.0', true);
	wp_enqueue_script('evolution-extension-carousel-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.carousel.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-kenburn-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.kenburn.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-layeranimation-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.layeranimation.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-migration-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.migration.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-navigation-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.navigation.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-parallax-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.parallax.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-slideanims.min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.slideanims.min.js', array(), '2.1.0', true);
	wp_enqueue_script('revolution-extension-video-min-js', get_template_directory_uri() . '/revolution/js/revolution.extension.video.min.js', array(), '2.1.0', true);

// Pagination Javascript Plugins  ~~~~~~~~~~~
	wp_enqueue_script('jquery-paginate-js', get_template_directory_uri() . '/gallery/jquery.paginate.js', array(), '0.1.1', true);

// Javascript Portfolio Gallery  ~~~~~~~~~~~
	wp_enqueue_script('jquery-swipebox-js', get_template_directory_uri() . '/gallery/jquery.swipebox.js', array(), '2.9', true);

//Javascript Plugins  ~~~~~~~~~~~
	wp_enqueue_script('plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array(), '9.9', true);
	wp_enqueue_script('master-js', get_template_directory_uri() . '/assets/js/master.js', array(), '9.9', true);
	// wp_enqueue_script('jquery-min-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDJNGOwO2hJpJ9kz8e0UUPjZhEbgDJTTXE', array(), '9.9', true);

//Typewriter Addon   ~~~~~~~~~~~
	wp_enqueue_script('revolution-addon-typewriter-min-js', get_template_directory_uri() . '/revolution/js/revolution.addon.typewriter.min.js', array(), '9.9', true);

	wp_enqueue_script('jquery-lightbox-js', get_template_directory_uri() . '/assets/js/jquery.lightbox.js', array(), '1.4.1', true);

	wp_enqueue_script('bootstrap-min-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.4.1', true);
	
//slider js ~~~~~~~~
	wp_enqueue_script('slider-js', get_template_directory_uri() . '/assets/js/slider.js', array(), '2.0', true);

//Misc ~~~~~~~~~~~
	wp_enqueue_script('misc-js', get_template_directory_uri() . '/assets/js/misc.js', array(), '9.9', true);
}

add_action('wp_enqueue_scripts', 'lotus_scripts');