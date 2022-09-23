<?php

function twpp_enqueue_styles(){
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/css/style.css");
  wp_enqueue_style('ipad-mini-style-sheet', get_template_directory_uri() . "/css/1_ipad_mini.css");
  wp_enqueue_style('tablet-for-hamburger-style-sheet', get_template_directory_uri() . "/css/2_tablet_for_hamburger.css");
  wp_enqueue_style('for-pc-style-sheet', get_template_directory_uri() . "/css/3_for_pc.css");
  wp_enqueue_style('for-wide-pc-style-sheet', get_template_directory_uri() . "/css/4_for_wide_pc.css");
}
// CSSの関数を作成
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');
// CSSの有効化

add_filter('show_admin_bar', '__return_false');
// 管理画面バーの非表示

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri() . '/js/main.js',
    array(),
    false,
    true
  );
}
// jsの関数(読み込み先設定)を作成
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');
// jsの有効化
