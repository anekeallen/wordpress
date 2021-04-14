<?php  

//Requerendo o arquivo customizer

require get_template_directory() . '/inc/customizer.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



//Carregando scripts e folhas de estilo
function load_scripts(){
	wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
	wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0','all');

	wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0','all');

}
add_action('wp_enqueue_scripts', 'load_scripts');



function wpcurso_config(){
	
	//Registrar o menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpcurso' ),
		'my_main_menu' => __('Main Menu', 'wpcurso'),
		'my_footer_menu' => __('Footer Menu', 'wpcurso')
	) );

	//Argumentos de tamanho de imagens
	$args = array(
		'width' => 1920,
		'height' => 225,
	);

	add_theme_support('custom-header', $args );	//Suporte para add imagens ao cabeçalho
	add_theme_support('post-thumbnails'); //Suporte para add miniaturas a posts
	add_theme_support( 'post-formats', array( 'aside', 'gallery','video','image' ) ); //Adiciona formatos de post ao tema.
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array('height' => 110, 'width' => 200));

	 add_image_size( 'imagem-pequena', 100, 100, TRUE ); //Add tamanho de miniaturas de imagem para usar differentes tamanhos de imagem no tema
	 add_image_size( 'imagem-media', 250, 250, TRUE );

	 //Habilitar suporte à tradução

	 $textdomain = 'wpcurso';

	 load_theme_textdomain( $textdomain, get_template_directory() . '/languages' );




}
add_action('after_setup_theme','wpcurso_config', 0 );

//registrando sidebars
add_action( 'widgets_init', 'wpcurso_sidebars' );

function wpcurso_sidebars(){
	/**
	 * Creates a sidebar
	 * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	 */
	$args = array(
		'name'          => __( 'Home Sidebar', 'wpcurso' ),
		'id'            => 'sidebar-1',
		'description'   => __('Sidebar to be used on Home Page', 'wpcurso'),
		'class'         => '',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	$args2 = array(
		'name'          => __( 'Blog Sidebar', 'wpcurso' ),
		'id'            => 'sidebar-2',
		'description'   => __('Sidebar to be used on Blog Page', 'wpcurso' ),
		'class'         => '',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	$args3 = array(
		'name'          => __( 'Services 1', 'wpcurso' ),
		'id'            => 'services-1',
		'description'   => __('First Service Area', 'wpcurso'),
		'class'         => '',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	$args4 = array(
		'name'          => __( 'Services 2', 'wpcurso' ),
		'id'            => 'services-2',
		'description'   => __('Second Service Area', 'wpcurso'),
		'class'         => '',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	$args5 = array(
		'name'          => __( 'Services 3', 'wpcurso' ),
		'id'            => 'services-3',
		'description'   => __('Third Service Area', 'wpcurso'),
		'class'         => '',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);

	$args6 = array(
		'name'          => __( 'Social Icons', 'wpcurso' ),
		'id'            => 'social-media',
		'description'   => __('Place your media icons here', 'wpcurso'),
		'class'         => '',
		'before_widget' => '<div class="widget-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	);
	
	

	register_sidebar( $args );
	register_sidebar( $args2 );
	register_sidebar( $args3 );
	register_sidebar( $args4 );
	register_sidebar( $args5 );
	register_sidebar( $args6 );
	
}



