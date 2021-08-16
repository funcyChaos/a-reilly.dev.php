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

	add_theme_support('title-tag');

	register_nav_menu('headerMenu','Header Menu');
}

add_action( 'after_setup_theme', 'theme_prefix_setup' );

function brutal_post_types()
{
	register_post_type('guide',array(
		'taxonomies'=>array('category'),
		'supports' => array('title', 'editor', 'excerpt'),
		'rewrite' => array('slug' => 'guides'),
		'has_archive' => true,
		'public' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'show_in_rest' => true,
		'labels' => array(
			'name' => 'Guides',
			'add_new_item' => 'Add New Guide',
			'edit_item' => 'Edit Guide',
			'all_items' => 'All Guides',
			'singular_name' => 'Guide'
		),
		'menu_icon' => 'dashicons-art'
	));
}

add_action('init', 'brutal_post_types');

function theme_prefix_the_custom_logo()
{

	if (function_exists('the_custom_logo'))
	{
		the_custom_logo();
	}
}

?>