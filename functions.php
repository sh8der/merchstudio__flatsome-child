<?php

require_once(__DIR__ . '/inc/cases_post_type.php');
require_once(__DIR__ . '/inc/cases_shortcodes.php');

define("THEME_ASSETS_PATH", get_template_directory_uri() . '-child');

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	wp_enqueue_style( 'custom-style', THEME_ASSETS_PATH . '/main.css?v17', array('flatsome-main') );
	wp_enqueue_script('custom-script', THEME_ASSETS_PATH . '/main.js?v7', array('jquery') );
}

add_action('wp_head', function() {
	echo file_get_contents(__DIR__ . '/head-scripts.html');
});





add_action('ux_builder_setup', function () {
	require_once __DIR__ . '/inc/shortcode/accordion-faq/accordion.php';
	require_once __DIR__ . '/inc/shortcode/accordion-faq/accordion_item.php';
});
require_once __DIR__ . '/inc/shortcode/accordion-faq/accordion__render.php';

require_once __DIR__ . '/inc/shortcode/new-main-page.php';