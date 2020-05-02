<?php
  // echo  'テスト';

  //コンテンツ幅をセット
if( ! isset($content_width)){
  $content_width = 723 ;
}


function custom_theme_setup() {
    //head内にフィールドリンクを出力
  add_theme_support('automatic-feed-links');

  //表示しているページに合わせ、(BLOG - MY PORTFOLIO以外の)タイトルタグを動的に出力
  add_theme_support('title-tag');

  //ブロックエディター用のwordpress標準CSSを有効化
  add_theme_support('wp-block-styles');

  //レスポンシブ(Youtube等の埋め込みコンテンty)
  add_theme_support('responsive-embeds');

  //アイキャッチを有効化。false：縦横比を保ったまま縮小 | true: 画像を切り抜く
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(231, 177, false);

  register_nav_menus (
    array(
      //メニューの位置のスラッグ名=>表示名
      //p202『カスタムメニュー』のあたり。管理画面では『グローバルナビゲーションん』という名前
      //header.php内で、wp_nav_menuで呼び出し
      'globalnav' => 'グローバルナビゲーションん',
    )
    );
}


//第一引数が実行のタイミング、第二引数が十王する関数。アクションフック
add_action('after_setup_theme', 'custom_theme_setup');

//wp_enqueue_styles: テーマで使用するCSSファイルを読みこむ。headではなく、 っこで定義する事が推奨されている
//テーマやプラグインでCSSの読み込む順番を正しくする、また重複を避けるため
//Javascriptを読みこむ時にはwp_enqueue_script関数を使う
function myportfolio_scripts() {
  wp_enqueue_style(
    'base-style',   //ハンドル名
    get_stylesheet_uri(), //ファイルのパス
    array(),  //依存関係。このcssよりも先に読み込みたいCSSがあったりする時はいじったりするが、普段は空の配列
    '1.0',  //バージョン指定
    'all' //メディアタイプ。通常はallだが、印刷用の時は'print'としたりする
    );
}

add_action('wp_enqueue_scripts', 'myportfolio_scripts');




function custom_widget_register(){
  // ウィジェットエリアを登録するための関数。関数名にsidebarとあるが、設置場所はサイドバーに限らない
  // sidebar.php内で『dynamic_sidebar('sidebar-widget')』で呼び出し。『ウィジェット』管理画面で見れる
  register_sidebar( array(
    'name'  =>  'サイドばーウィジェットエリア',
    'id'  =>  'sidebar-widget',
    'description'=> ' ブログページのサイドバーに表示されます',
    'before_widget' => '<div id="%1$s" class="c-widget  %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="c-widget__title">',
    'after_title' => '</h2>'
 
  ));
}

add_action('widgets_init', 'custom_widget_register');