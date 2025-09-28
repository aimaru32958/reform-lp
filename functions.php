<?php 

// カスタマイズ設定
function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");


// css・jsの読み込み
function my_script_init() {
    wp_enqueue_style("swaiper", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css");
    wp_enqueue_script("swaiper", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", array("jquery"), true);
    wp_enqueue_style("my", get_template_directory_uri()."/assets/css/style.css", array(), filemtime(get_theme_file_path('assets/css/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri()."/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('assets/js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


// メニューの作成
function my_menu_init() {
    register_nav_menus(
        array(
            "global" => "ヘッダーメニュー",
            "drawer" => "ドロワーメニュー",
            "footer" => "フッターメニュー"
        )
    );
}
add_action( "init", "my_menu_init" );

/*-------------------------------------------------------*/
/* Contact Form 7で自動挿入されるPタグ、brタグを削除
/*-------------------------------------------------------*/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
}