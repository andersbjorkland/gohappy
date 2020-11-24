<?php

function getParsedContentArray() {
	$iteration = 0;
	$mainContent = "";
	$sideContent = "";

	while(have_posts()) {
		the_post();
		$mainId  = get_the_ID();
		$excerpt = "";
		if ( has_excerpt() ) {
			$excerpt = wp_trim_words( get_the_excerpt(), 20 );
		} else {
			$excerpt = wp_trim_words( get_the_content(), 20 );
		}


		if ( $iteration === 0 ) {
			$mainContent =
				'<div class="content__post">'
                .'	<h1>' . get_the_title() . '</h1>'
                .'	<time>' . get_the_date() . '</time>	'
                . get_the_content()
                .'</div>';
		} else {
			$sideContent .=
				'<div class="sidebar__item">'
                .'	<h3>' . get_the_title() . '</h3>'
                .'	<time>' . get_the_date() . '</time>'
                .'	<p>' . $excerpt . '</p>'
                .'  <a href="' . get_the_permalink() . '">Read more</a>'
                .'</div>';
		}
		$iteration ++;
	}
	if ($iteration === 1) {
		$posts = new WP_Query([
			'posts_per_page' => 5
		]);

		while ($posts->have_posts()) {
			$posts->the_post();
			if (get_the_id() !== $mainId) {
				$sideContent .=
					'<div class="sidebar__item">'
					.'	<h3>' . get_the_title() . '</h3>'
					.'	<time>' . get_the_date() . '</time>'
					.'	<p>' . $excerpt . '</p>'
					.'  <a href="' . get_the_permalink() . '">Read more</a>'
					.'</div>';
			}
		}
		wp_reset_postdata();
	}

	return ['main' => $mainContent, 'secondary' => $sideContent];
}

function theme_files() {
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Tangerine:400,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,600,900,900i|Roboto:100,300,300i,400,500;700' );
	wp_enqueue_script( 'font-awesome', '//kit.fontawesome.com/44dcb31394.js' );
	//wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/5.7/css/font-awesome.min.css' );

	if ( strstr( $_SERVER['SERVER_NAME'], 'andersbjorkland.local' ) ) {
		wp_enqueue_script( 'main-scripts-js', 'http://localhost:3000/bundled.js', null, '1.0', true );
	} else {
		wp_enqueue_script( 'our-vendors.js', get_theme_file_uri( '/bundled-assets/undefined' ), null, '1.0', true );
		wp_enqueue_script( 'main-scripts-js', get_theme_file_uri( '/bundled-assets/scripts.9fb62b83c6d010909330.js' ), null, '1.0', true );
		wp_enqueue_style( 'our-main-styles', get_theme_file_uri( '/bundled-assets/styles.9fb62b83c6d010909330.css' ) );
	}
}

add_action('wp_enqueue_scripts', 'theme_files');

function expandFeatures() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	add_image_size('selfPortrait', 500, 500, true);
	add_image_size('smallCase', 380, 200, true);
	add_image_size('mediumCase', 760, 400, true);
	add_image_size('standardCase', 1200, 630, true);
}

add_action('after_setup_theme', 'expandFeatures');