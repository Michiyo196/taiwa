<?php 
//support-faq 検索結果


/**
 * Contact Form 7 "フリガナ"のバリデーションを追加する
 */
function custom_wpcf7_validate_kana($result,$tag)
{
    $tag   = new WPCF7_Shortcode($tag);
    $name  = $tag->name;
    $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

    // //平仮名のみ
     if ($name === "kana1") {
         if(!preg_match("/^[ぁ-んー 　]+$/u", $value)) {
             $result->invalidate( $tag,"平仮名で入力してください。");
       }
    }
    if ($name === "kana2") {
    if (strlen($_POST['kana2']) > 1) {
         if(!preg_match("/^[ぁ-んー 　]+$/u", $value)) {
             $result->invalidate( $tag,"平仮名で入力してください。");
       }
       }
    }
    if ($name === "kana3") {
    if (strlen($_POST['kana3']) > 1) {
         if(!preg_match("/^[ぁ-んー 　]+$/u", $value)) {
             $result->invalidate( $tag,"平仮名で入力してください。");
       }
      }
    }


    return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);
// Contact Form7の送信ボタンをクリックした後の遷移先設定（複数設定可能）
add_action( 'wp_footer', 'add_origin_thanks_page' );
 function add_origin_thanks_page() {
 $entry2 = home_url('/online-normalentry/online-normalentry-thanks/');//オンラインエントリー２（一般）
$thanks = home_url('/entry-thanks/');//増えた場合こちらに追加
//3614: '{$entry2}',の番号は投稿post id（コンタクトフォームの）
echo <<< EOC
     <script>
       var thanksPage = {
         3614: '{$entry2}',
         1111: '{$thanks}',
       };
     document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = thanksPage[event.detail.contactFormId];
     }, false );
     </script>
   EOC;
 }

//非公開記事を購読者でも閲覧できるように

$subscriber = get_role( 'subscriber' );
$subscriber->add_cap( 'read_private_posts' );

//カスタム投稿タイプの検索
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "search-{$post_type}.php";
      $templates[] = 'search.php';
      $template = get_query_template('search',$templates);
     }
  return $template;
}

//カスタム投稿タイプによって記事の表示数を変える方法
add_action( 'pre_get_posts', 'my_custom_query_vars' );
function my_custom_query_vars( $query ) {
	/* @var $query WP_Query */
	if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('カスタム投稿タイプのスラッグ') ) {
			$query->set( 'support_info' , -1 );//表示したい数
		}
	}
	return $query;
}

//絵文字機能を無効化
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//ショートコードを使ったphpファイルの呼び出し方法
// 呼び出し方法　[myphp file='to_sodan']　※to_sodan.phpの場合
function my_php_Include($params = array()) {
 extract(shortcode_atts(array('file' => 'default'), $params));
 ob_start();
 include(STYLESHEETPATH . "/$file.php");
 return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');

// ブログURLを呼び出し　[url]
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}
// テンプレートURLを呼び出し　[tdir]
add_shortcode('tdir', 'tmp_dir');
function tmp_dir() {
return get_template_directory_uri();
}

//アイキャッチ画像
add_theme_support('post-thumbnails');
//アイキャッチ画像の定義と切り抜き
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
	add_image_size('image800600', 300, 300 ,true );
}
//img タグへサイズ指定を入れたくない場合
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

//管理画面入力スタイル
function set_custom_editorstyle() {
	// editor-style を有効化
	add_theme_support('editor-style');

	global $editor_styles;
	$stylesheet = false;
	$current_screen = get_current_screen();

	switch ($current_screen->post_type) {
		case 'post' :
			$stylesheet = 'css/editor-style-post.css';
		break;

		case 'page' :
			$stylesheet = 'css/editor-style-common.css';
		break;
	
	case 'correspondence' :
			$stylesheet = 'css/editor-style-post.css';
		break;
		
		case 'support_info' :
			$stylesheet = 'css/editor-style-post.css';
		break;
		
	}

	$editor_styles	= (array) $editor_styles;
	$stylesheet		= (array) $stylesheet;

	$editor_styles	= array_merge($editor_styles,$stylesheet);
}

add_action('current_screen','set_custom_editorstyle');

//Gutenbergの編集画面で独自css
function gutenberg_support_setup() {
 
  //Gutenberg用スタイルの読み込み
  add_theme_support( 'wp-block-styles' );
 
  //「幅広」と「全幅」に対応
  add_theme_support( 'align-wide' );
 
  //独自スタイルの適用
  add_theme_support( 'editor-styles' );
  add_editor_style( 'css/editor-style-common.css' );
 
}
add_action( 'after_setup_theme', 'gutenberg_support_setup' );

// 抜粋の長さを変更する
function custom_excerpt_length($length) {   
    return 30;
}   
add_filter('excerpt_length', 'custom_excerpt_length');

// 文末文字を変更する
function custom_excerpt_more($more) {
    return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//HTMLソースから情報を削除
// WP version
remove_action('wp_head', 'wp_generator');
//ブログ編集用のアドレス
remove_action('wp_head', 'rsd_link');

// RSSにアイキャッチ画像を表示
function rss_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
		$content = '<div>' . get_the_post_thumbnail($post->ID) . '</div>' . get_the_content();
	}
	return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 * ※ 記載後にパーマリンク設定で「変更を保存」してください。
 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );




//「投稿」を「お知らせ」に変更

function change_post_menu_label() {
global $menu;
global $submenu;
$menu[5][0] = 'お知らせ';
$submenu['edit.php'][5][0] = 'お知らせ一覧';
$submenu['edit.php'][10][0] = '新しいお知らせ';
$submenu['edit.php'][16][0] = 'タグ';
//echo ";
}
function change_post_object_label() {
global $wp_post_types;
$labels = &$wp_post_types['post']->labels;
$labels->name = 'お知らせ';
$labels->singular_name = 'お知らせ';
$labels->add_new = _x('追加', 'お知らせ');
$labels->add_new_item = 'お知らせの新規追加';
$labels->edit_item = 'お知らせの編集';
$labels->new_item = '新規お知らせ';
$labels->view_item = 'お知らせを表示';
$labels->search_items = 'お知らせを検索';
$labels->not_found = '記事が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

///////////////////画像キャプションで出力される不要なwidthスタイルを削除///////////////////
function my_img_caption_shortcode($attr, $content = null) {
  if ( ! isset( $attr['caption'] ) ) {
    if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
      $content = $matches[1];
      $attr['caption'] = trim( $matches[2] );
    }
  }

  $output = apply_filters('img_caption_shortcode', '', $attr, $content);
  if ( $output != '' )
    return $output;
    extract(shortcode_atts(array(
      'id' => '',
      'align' => 'alignnone',
      'width' => '',
      'caption' => ''
  ), $attr, 'caption'));

  if ( 1 > (int) $width || empty($caption) )
    return $content;

  if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

  return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}
add_shortcode('caption', 'my_img_caption_shortcode');
?>