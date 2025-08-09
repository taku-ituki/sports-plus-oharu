<?php 
// <head>内のメタ情報・外部ファイルの読み込みを設定
// function custom_theme_head_tags() {
//     // metaタグ出力
//     echo '<meta charset="' . esc_attr(get_bloginfo('charset')) . '">' . "\n";
//     echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
//     echo '<meta name="format-detection" content="telephone=no">' . "\n";
//     echo '<meta name="robots" content="noindex">' . "\n";
//     // titleタグは基本的に WordPress に任せる（必要に応じて wp_title() の使用も可能）
//     // description, keywords（任意で必要に応じて設定）
//     echo '<meta name="description" content="スポーツプラスおおはるは大治町を拠点とした総合型地域スポーツクラブです。子どもから高齢者まで誰もがスポーツを楽しめる環境を提供しています">' . "\n";
//     echo '<meta name="keywords" content="スポーツプラスおおはる">' . "\n";
//     // OGP
//     echo '<meta property="og:title" content="スポーツプラスおおはる | 総合型地域スポーツクラブ（大治町）">' . "\n";
//     echo '<meta property="og:type" content="website">' . "\n";
//     echo '<meta property="og:url" content="' . esc_url(home_url('/')) . '">' . "\n";
//     echo '<meta property="og:image" content="' . esc_url(get_theme_file_uri('/dist/assets/images/common/logo.svg')) . '">' . "\n";
//     echo '<meta property="og:site_name" content="スポーツプラスおおはる">' . "\n";
//     echo '<meta property="og:description" content="スポーツプラスおおはるは、大治町を拠点とした総合型地域スポーツクラブ。子どもから高齢者までが参加できる、地域密着型のスポーツクラブです。">' . "\n";
//     // favicon
//     echo '<link rel="icon" href="' . esc_url(get_theme_file_uri('/dist/assets/images/common/favicon.ico')) . '">' . "\n";
// }
// add_action('wp_head', 'custom_theme_head_tags');
// CSS・JSファイル、Googleフォントの読み込み
function custom_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
        [],
        null
    );
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        [],
        '8'
    );
    // メインCSS
    wp_enqueue_style(
        'theme-style',
        get_theme_file_uri('/dist/assets/css/style.css'),
        [],
        filemtime(get_theme_file_path('/dist/assets/css/style.css'))
    );
    // jQuery（WordPressに同梱されているバージョンを使用せず独自に読み込む場合）
    wp_enqueue_script(
        'custom-jquery',
        get_theme_file_uri('/dist/assets/js/jquery-3.7.1.js'),
        [],
        '3.7.1',
        true
    );
    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        [],
        '8',
        true
    );
    // メインJS
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/dist/assets/js/script.js'),
        [],
        filemtime(get_theme_file_path('/dist/assets/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

//投稿にアイキャッチ画像を設定するためのコード
function my_theme_setup() {
  // アイキャッチ（投稿サムネイル）を有効化
  add_theme_support( 'post-thumbnails' );
  // タイトルタグをWPに任せる（<title>を自動生成）
  add_theme_support( 'title-tag' );
  // RSSフィードのリンクを自動出力
  add_theme_support( 'automatic-feed-links' );
  // HTML5マークアップでの出力（フォームやコメント、ギャラリー等）
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// アイキャッチ画像の <img> タグから デフォルトのwidth / height を削除する。（自分のCSSコードを反映させる）
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );

// 投稿編集画面でアイキャッチ画像を本文上部にプレビュー表示
function my_admin_post_thumbnail_preview() {
    global $post;

    // 投稿画面・固定ページ編集画面のみ
    if ( ! isset( $post ) || ! in_array( get_current_screen()->base, array( 'post', 'page' ), true ) ) {
        return;
    }

    // アイキャッチが設定されている場合
    if ( has_post_thumbnail( $post->ID ) ) {
        $thumb_url = get_the_post_thumbnail_url( $post->ID, 'medium' ); // mediumサイズで取得
        ?>
<style>
/* 本文エディタの上にプレビュー枠を作る */
.editor-styles-wrapper:before {
    content: '';
    display: block;
    width: 100%;
    max-width: 600px;
    height: auto;
    margin: 0 auto 20px;
    background-image: url('<?php echo esc_url( $thumb_url ); ?>');
    background-size: cover;
    background-position: center;
    aspect-ratio: 16 / 9;
    /* アスペクト比を固定 */
    border: 2px solid #ddd;
    border-radius: 4px;
}
</style>
<?php
    }
}
add_action( 'admin_head', 'my_admin_post_thumbnail_preview' );