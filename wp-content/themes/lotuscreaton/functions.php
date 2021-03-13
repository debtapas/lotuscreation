<?php 
include( get_template_directory() . '/inc/enqueue.php');


//Register Nav Menu ~~~~~~~~~~~~~~~~~
function reg_navigation(){
	register_nav_menu(
		array(
		'header-menu' => 'Primary Menu'
	));

}
do_action('init', 'reg_navigation');