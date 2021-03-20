<?php

//Register Nav Menu ~~~~~~~~~~~~~~~~~
function reg_navigation(){
	register_nav_menus(
		array(
		'header-menu'	=>	'Primary Menu'
	));

}
add_action('init', 'reg_navigation');


// Home - about section
