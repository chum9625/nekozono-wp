<?php
/**
 * Nekozono WordPress Theme
 * @author: ChumTech
 * @link: https://demo.chum9625.com/nekozono/
 */
if ( !defined( 'ABSPATH' ) ) exit;

define("ZONO", get_template_directory_uri());

/*
** 外部ファイル読み込み
*/
function script_init() {
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v6.1.1/css/all.css');
  wp_enqueue_style('my_style', 'https://demo.chum9625.com/dist/compiled.css');
  wp_enqueue_script('my_script', ZONO.'/js/main.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'script_init');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

/*
** title区切り文字
*/
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
  $separator = '🍀';
  return $separator;
}

/*
** indexページ用title
*/
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title) {
  if (is_home()) {
    unset($title['tagline']);
    $title['title'] = '新着情報 🍀 保護猫ガーデン猫園';
  }
  return $title;
}

/*
** menu 有効化
*/
function menu_init() {
  register_nav_menus(array(
    'header' => 'ヘッダーメニュー',
    'footer' => 'フッターメニュー',
    'drawer' => 'ドロワーメニュー',
  ));
}
add_action('after_setup_theme', 'menu_init');
