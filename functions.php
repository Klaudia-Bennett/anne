<?php

function my_style_output(){
wp_enqueue_style('reset','https://unpkg.com/modern-css-reset/dist/reset.min.css');
wp_enqueue_style('my-style',get_theme_file_uri('./css/style.css'));
}
add_action('wp_enqueue_scripts','my_style_output');

function my_style_font(){
    wp_register_style('eng1',get_theme_file_uri('./font/Balqis.ttf'));
    wp_enqueue_style('eng1');
    wp_register_style('eng2',get_theme_file_uri('./font/AbrilFatface-Regular.ttf'));
    wp_enqueue_style('eng2');
}
add_action('wp_enqueue_scripts','my_style_font');

function my_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('title.tag');
}
add_action('after_setup_theme','my_theme_support');

function change_title_separator( $sep ){
$sep = ' | ';
return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function my_script_output() {
  wp_enqueue_script( 'my-script', get_theme_file_uri('./js/index.js'), array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'my-script', get_theme_file_uri('./js//index.js'), array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'my-script', get_theme_file_uri('./js/index.js'), array('jquery'), '1.0.0', true);
  wp_enqueue_script( 'my-script', get_theme_file_uri('./js/index.js'), array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'my_script_output');

?>