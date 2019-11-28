<?php 
function ws_theme_styles() {
	// Css
	wp_enqueue_style('estilos_css', get_template_directory_uri().'/assets/css/estilos.css', array('bootstrap_css'));
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.css');

	// Js
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'), false, true);

}

function ws_after_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', __('Primary Menu', 'testefrontend'));
}