<?php

	function style_files()
	{
		wp_enqueue_script('main-js',get_theme_file_uri('/js/script.js'),array('jquery'),'1.0',true);

		wp_enqueue_script('font-awesome','//kit.fontawesome.com/aebdbe8212.js');

		wp_enqueue_style('main_style_sheet',get_theme_file_uri('/css/dist/style.css'));
	}

	add_action('wp_enqueue_scripts','style_files');

?>