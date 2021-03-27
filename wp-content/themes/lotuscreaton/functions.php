<?php 
include( get_template_directory() . '/inc/enqueue.php' );
include( get_template_directory() . '/inc/support.php' );
include( get_template_directory() . '/inc/theme-support.php' );



/*Disable update and hide plugin update notifcation */
function disable_any_plugin_updates( $value ) {
	$Disableplugins = ['advanced-custom-fields-pro/acf.php'];
		if ( isset($value) && is_object($value) ) {
			foreach ($Disableplugins as $plugin) {
				if ( isset( $value->response[$plugin] ) ) {
				unset( $value->response[$plugin] );
				}
			}
		}
	return $value;
	}
add_filter( 'site_transient_update_plugins', 'disable_any_plugin_updates' );