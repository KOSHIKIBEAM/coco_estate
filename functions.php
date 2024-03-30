<?php

function my_script_init() {

    wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.css", array(), filemtime(get_theme_file_path('/assets/css/style.css')), "all");

    wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/accordion.js", array("jquery"), filemtime(get_theme_file_path('/assets/js/accordion.js')), true);

    wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/swiper.js", array("jquery"), filemtime(get_theme_file_path('/assets/js/swiper.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");



if (!function_exists('sampletheme_setup')) :
    function sampletheme_setup() {
        //編集画面でスタイルを読み込み可能にする
        add_theme_support('editor-styles');

        //編集画面でスタイルを読み込む
        add_editor_style('style-editor.css');

        //RSS フィードを追加する
        add_theme_support('automatic-feed-links');

        //title タグをWordPressで生成する
        add_theme_support('title-tag');

        //アイキャッチ画像を使う
        add_theme_support('post-thumbnails');

        //アイキャッチ画像のサイズを設定する
        set_post_thumbnail_size(1568, 9999);

        //ナビゲーションメニューを設定する Lesson03「ナビゲーション」
        register_nav_menus(
            [
                'header_menu' => 'ヘッダー',
                'footer_menu' => 'フッター',
                'drawer_menu' => 'ドロワー'
            ]
        );

        //HTML5形式のタグを出力する
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        );

        //カスタムロゴを有効にする
        add_theme_support(
            'custom-logo',
            [
                'height'      => 190,
                'width'       => 190,
                'flex-width'  => false,
                'flex-height' => false,
            ]
        );

        //ウィジェット更新時に、見た目を更新する
        add_theme_support('customize-selective-refresh-widgets');


        //ブロックの追加スタイルを読み込む
        add_theme_support('wp-block-styles');

        //画像を幅広で表示可能にする
        add_theme_support('align-wide');

        //埋め込みコンテンツをレスポンシブにする
        add_theme_support('responsive-embeds');


        //編集画面の文字サイズ選択肢 Lesson11「Gutenberg」
        add_theme_support(
            'editor-font-sizes',
            [
                [
                    'name'      => '小',
                    'size'      => 19.5,
                    'slug'      => 'small',
                ],
                [
                    'name'      => '通常',
                    'size'      => 22,
                    'slug'      => 'normal',
                ],
                [
                    'name'      => '大',
                    'size'      => 36.5,
                    'slug'      => 'large',
                ],
            ]
        );

        //編集画面のカラーパレット設定 (紙面では省略)
        //文字色に設定した場合は"has-dark-gray-color"、
        //背景色に設定した場合はclass="has-dark-gray-background-color"
        //のクラスが付与されるので、テキストサイズと同様にCSSで指定する
        add_theme_support(
            'editor-color-palette',
            [
                [
                    'name'  => '濃い灰色',
                    'slug'  => 'dark-gray',
                    'color' => '#111',
                ],
                [
                    'name'  => '薄い灰色',
                    'slug'  => 'light-gray',
                    'color' => '#767676',
                ],
                [
                    'name'  => '白色',
                    'slug'  => 'white',
                    'color' => '#FFF',
                ],
            ]
        );
    }
endif;
add_action('after_setup_theme', 'sampletheme_setup');
