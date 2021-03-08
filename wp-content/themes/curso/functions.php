<?php  

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
		'primary' => __( 'Primary Menu', 'THEMENAME' ),
		'my_main_menu' => 'Main Menu',
		'my_footer_menu' => 'Footer Menu'
	) );

	//Argumentos de tamanho de imagens
	$args = array(
		'width' => 1920,
		'height' => 225,
	);

	add_theme_support('custom-header', $args );	//Suporte para add imagens ao cabeçalho
	add_theme_support('post-thumbnails'); //Suporte para add miniaturas a posts
	add_theme_support( 'post-formats', array( 'aside', 'gallery','video','image' ) ); //Adiciona formatos de post ao tema.

	 add_image_size( 'imagem-pequena', 100, 100, TRUE ); //Add tamanho de miniaturas de imagem para usar differentes tamanhos de imagem no tema
	 add_image_size( 'imagem-media', 250, 250, TRUE );


}
add_action('after_setup_theme','wpcurso_config', 0 );

