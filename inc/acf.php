<?php
if( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title' 	=> __('Мои Настройки', 'productify'),
        'menu_title' 	=> __('Мои Настройки', 'productify'),
        'menu_slug' 	=> 'my-theme-options',
        'capability' 	=> 'edit_posts',
        'redirect' 	    => false
    ));

}

# Add autosave path for acf-json fields
add_filter( 'acf/settings/save_json', 'theme_acf_json_save_point' );
function theme_acf_json_save_point( $path ) {
	$path = get_template_directory() . '/acf_sync';
	return $path;
}

# Add autoload path for acf-json fields
add_filter( 'acf/settings/load_json', 'theme_acf_json_load_point' );
function theme_acf_json_load_point( $paths ) {
	unset( $paths[0] );
	$paths[] = get_template_directory() . '/acf_sync';
	return $paths;
}

#Отключить обновление ACF для клиентов
//add_filter('site_transient_update_plugins', 'theme_remove_update_nag');
function theme_remove_update_nag($value) {
    unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
    return $value;
}
