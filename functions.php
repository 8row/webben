<?php
function custom_theme_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => ' グローバル',
    )
);

function classes(){
    $classes = array(
		'c-list-item',
		'inview',
    );
    return $classes;
}

// アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );

// サムネイル画像サイズ
add_image_size( 'thumbnail', 90, 1000, false );

/*【管理画面】メディアを追加で挿入されるimgタグから不要な属性を削除 */
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html){
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width と height を削除
//  $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html); // class を削除
//  $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html); // title を削除
//  $html = preg_replace('/<a href=".+">/', '', $html); // a タグを削除
//  $html = preg_replace('/<\/a>/', '', $html); // a の閉じタグのを削除
  return $html;
}