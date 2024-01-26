<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

     //タイトル出力
     function portfolio_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'portfolio_title' );

//テーマディレクトリまでのパスを定数にしておく
define("DIRE", get_template_directory_uri());

function add_files(){
    //リセットCSS
    wp_enqueue_style('reset_style','https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css');
    //Googleフォント
    wp_enqueue_style('notoserif','https://fonts.googleapis.com',array(), '1.0.0' );
    wp_enqueue_style('notoserif','https://fonts.gstatic.com',array(), '1.0.0' );
    wp_enqueue_style('notoserif','https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swa',array(), '1.0.0' );
    //FontAwesome
    // wp_enqueue_script('fontawesome_script', 'https://kit.fontawesome.com/92cec73944.js' , '6'); 
    //メインのCSSファイル
    wp_enqueue_style('my_style',DIRE.'/css/style.css',array(), '1.0.0' );
    //JavaScriptファイル
    wp_enqueue_script('my_script',DIRE.'/script.js',array( 'jquery' ), '1.0.0' ,true);
}
add_action('wp_enqueue_scripts', 'add_files');