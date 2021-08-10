<?

	function style_files()
	{
		wp_enqueue_script('main-js',get_theme_file_uri('/js/script.js'),array('jquery'),'1.0',true);

		wp_enqueue_script('font-awesome','//kit.fontawesome.com/aebdbe8212.js');

		wp_enqueue_style('main_style_sheet',get_theme_file_uri('/css/dist/style.css'));
	}

	add_action('wp_enqueue_scripts','style_files');

	function theme_prefix_setup()
	{
	
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-width' => true
		) );

		add_theme_support('post-thumbnails');
	
	}

	add_action( 'after_setup_theme', 'theme_prefix_setup' );

	function theme_prefix_the_custom_logo()
	{
	
		if (function_exists('the_custom_logo'))
		{
			the_custom_logo();
		}
	
	}

?>