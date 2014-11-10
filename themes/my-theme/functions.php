<?php

# Template Directory
$dir = get_template_directory_uri();

register_nav_menu('main', 'Main nav bar');

add_editor_style('editor-style.css');

if(!is_admin()){

	# jQuery
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
		false,
		false,
		true
	);

	# SlidesJS
	wp_register_script('slidesjs', '//cdnjs.cloudflare.com/ajax/libs/slidesjs/3.0/jquery.slides.min.js', false, false, true);

	# Theme script
	wp_register_script('theme', $dir.'/js/script.js', 
		['jquery', 'slidesjs'],
		false, 
		true
	);

	wp_enqueue_script('theme');

	# Bootstrap
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');

	# Theme styles
	wp_enqueue_style('theme', $dir.'/css/style.css');

}