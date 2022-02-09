<?php

function add_files() {
    wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
}

function add_stylesheet() {
    wp_register_style(
        'reset', // ★resetという別名をつけた(リセット用CSSだったので)
        get_template_directory_uri().'/assets/css/reset.css', // CSSのパス
        array(), // これより先に読むCSSはないので空の配列
        '1.0',
        false // headタグ内に出力
    );
    wp_enqueue_style(
        'main',
        get_template_directory_uri().'/assets/css/style.css',
        array('reset'), // ★の名前を配列に指定=style.cssより先に読み込む
        '1.0',
        false
    );
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

/*function add_script() {
    wp_enqueue_script(
        'main', // mainという名前を設定
        get_template_directory_uri().'/assets/js/script.js',
        array(),
        true
    );
}
add_action('wp_enqueue_scripts', 'add_script');*/