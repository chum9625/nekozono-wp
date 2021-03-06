<?php
/**
 * Nekozono WordPress Theme
 *
 * @package WordPress
 * @author ChumTech
 * @link https://demo.chum9625.com/nekozono/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ZONO', get_template_directory_uri() );

/**
 * 外部ファイル読み込み.
 *
 * @return void
 */
function script_init() {
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v6.1.1/css/all.css', array(), '1.0' );
	wp_enqueue_style( 'std_style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'my_style', 'https://demo.chum9625.com/dist/compiled.css', array(), '1.0' );
	wp_enqueue_script( 'my_script', 'https://demo.chum9625.com/nekozono/js/main.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'script_init' );


/**
** 機能有効化.
*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

/**
 * Summary.
 *
 * Title区切り文字.
 *
 * @param type $separator Description.
 */
function my_document_title_separator( $separator ) {
	$separator = '🍀';
	return $separator;
}
add_filter( 'document_title_separator', 'my_document_title_separator' );

/**
 * Summary.
 *
 * インデックスページ用タイトル.
 *
 * @param type $title Description.
 */
function my_document_title_parts( $title ) {
	if ( is_home() ) {
		unset( $title['tagline'] );
		$title['title'] = '新着情報 🍀 保護猫ガーデン猫園';
	}
	return $title;
}
add_filter( 'document_title_parts', 'my_document_title_parts' );

/**
 * メニューの有効化 function
 *
 * @return void
 */
function menu_init() {
	register_nav_menus(
		array(
			'header' => 'ヘッダーメニュー',
			'footer' => 'フッターメニュー',
			'drawer' => 'ドロワーメニュー',
		)
	);
}
add_action( 'after_setup_theme', 'menu_init' );

/**
 * Summary
 *
 * Description API カテゴリ名を取得する.
 * register_rest_field関数を用いget_category_name関数からカテゴリ名を取得し追加する.
 */
function register_category_name() {
	register_rest_field(
		'post',
		'category_name',
		array(
			'get_callback' => 'get_category_name',
		)
	);
}
add_action( 'rest_api_init', 'register_category_name' );

/**
 * Summary.
 *
 * $objectは現在の投稿の詳細データが入る.
 *
 * @param type $object Description.
 * @return type Description.
 */
function get_category_name( $object ) {
	$category = get_the_category( $object['id'] );
	$cat_name = $category[0]->cat_name;
	return $cat_name;
}
