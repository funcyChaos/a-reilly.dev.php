<?

function style_files()
{
	wp_enqueue_script('main-js',get_theme_file_uri('/js/script.js'),array('jquery'),'1.0',true);

	wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=Courier+Prime&display=swap');

	wp_enqueue_script('font-awesome','//kit.fontawesome.com/aebdbe8212.js',array('jquery'),'1.0',true);

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

	add_theme_support('title-tag');

	register_nav_menu('headerMenu','Header Menu');
}

add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo()
{

	if (function_exists('the_custom_logo'))
	{
		the_custom_logo();
	}

}

function my_theme_options($wp_customize)
{
	$wp_customize->add_section( 
		'mytheme_footer_options', 
		array(
			'title'       => __('Footer Settings', 'mytheme'),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change footer options here.', 'mytheme'), 
		) 
	);

	// Custom Icon 1
	$wp_customize->add_setting('custom_icon_1',
	array(
		'default' => '<i class="fas fa-ban fa-5x"></i>'
	)
	);

	$wp_customize->add_control('custom_icon_1', array(
		'label' => __('Custom Icon 1'),
		'type' => 'textarea',
		'section' => 'mytheme_footer_options',
	));
	
	$wp_customize->add_setting('icon_1_link',
	array(
		'default' => ''
		)
	);
	
	$wp_customize->add_control('icon_1_link', array(
		'label' => __('Icon 1 Link'),
		'type' => 'textarea',
		'section' => 'mytheme_footer_options',
	));
	// End Custom Icon 1
	
	// Custom Icon 2
	$wp_customize->add_setting('custom_icon_2',
	array(
		'default' => ''
	)
	);

	$wp_customize->add_control('custom_icon_2', array(
		'label' => __('Custom Icon 2'),
		'type' => 'textarea',
		'section' => 'mytheme_footer_options',
	));

	$wp_customize->add_setting('icon_2_link',
	array(
		'default' => ''
		)
	);
	
	$wp_customize->add_control('icon_2_link', array(
		'label' => __('Icon 2 Link'),
		'type' => 'textarea',
		'section' => 'mytheme_footer_options',
	));
	// End Custom Icon 2
}
	
add_action('customize_register' , 'my_theme_options');
?>