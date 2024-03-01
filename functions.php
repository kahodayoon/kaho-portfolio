<?php
    //テーマサポート
    register_nav_menus() ;
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    the_post_thumbnail( 'medium' ); 

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
    wp_enqueue_style('reset_style',DIRE.'/css/ress.css',array(), '1.0.0' );
    wp_enqueue_style('notoserif','https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swa',array(), '1.0.0' );
    //メインのCSSファイル
    wp_enqueue_style('my_style',DIRE.'/css/style.css',array(), '1.0.0' );
    //JavaScriptファイル
    wp_enqueue_script('my_script',DIRE.'/script.js',array( 'jquery' ), '1.0.0' ,true);
}
add_action('wp_enqueue_scripts', 'add_files');

//トップページだけ反映させるCSS
function my_styles()  {
    //front-page用のCSS
    if ( is_front_page('front-page') ) {
      wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), '1.0.0' );
      }
    }
  add_action( 'wp_enqueue_scripts', 'my_styles' );

//メニュー位置の設定
if ( ! function_exists( 'lab_setup' ) ) :
    function lab_setup() {
        register_nav_menus( array(
            'global' => 'グローバルナビ',
            'header' => 'ヘッダーナビ',
            'footer' => 'フッターナビ',
        ) );
    }
    endif;
    add_action( 'after_setup_theme', 'lab_setup' );
    
    
    //テーマチェックにて追加
    add_theme_support( "wp-block-styles" ) ;
    add_theme_support( "responsive-embeds" );
    //add_theme_support( "custom-logo", true) ;
    add_theme_support( "align-wide" );
    //カスタム背景有効化
    add_theme_support( 'custom-background' );
    //カスタムヘッダー画像有効化
    add_theme_support( 'custom-header' );
    //コメントフォーム、検索フォーム、コメントリストをhtml5マークアップ
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    // ビジュアルエディタ用の css 読み込み
    add_editor_style( 'css/style.css' );
    //フィードの設定
    add_theme_support( 'automatic-feed-links' );

//slickの追加
function add_slick_files() {
    //CSSの読み込み
    wp_enqueue_style('slick-style', get_template_directory_uri() . '/slick/slick.css', array(), '1.0.0');
    wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/slick/slick-theme.css', array('slick-style'), '1.0.0');
  
    //jsの読み込み
    wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script( 'slider-script', get_template_directory_uri() . '/slider.js', array('slick-script'), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'add_slick_files' );