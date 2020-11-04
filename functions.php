<?php

function theme_files() {
	wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	if ( strstr( $_SERVER['SERVER_NAME'], 'andersbjorkland.local' ) ) {
		wp_enqueue_script( 'main-university-js', 'http://localhost:3000/bundled.js', null, '1.0', true );
	} else {
		wp_enqueue_script( 'our-vendors.js', get_theme_file_uri( '/bundled-assets/undefined' ), null, '1.0', true );
		wp_enqueue_script( 'main-scripts-js', get_theme_file_uri( '/bundled-assets/scripts.9f8517c275ca3e15938c.js' ), null, '1.0', true );
		wp_enqueue_style( 'our-main-styles', get_theme_file_uri( '/bundled-assets/styles.9f8517c275ca3e15938c.css' ) );
	}
}

add_action('wp_enqueue_scripts', 'theme_files');

function expandFeatures() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_image_size('selfPortrait', 500, 500, true);
}

add_action('after_setup_theme', 'expandFeatures');