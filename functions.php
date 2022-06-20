<?php 

function my_scripts_method() {
// ------------------------------------------------
// css
// ------------------------------------------------
  wp_enqueue_style('main-style',
  get_template_directory_uri() . '/style.css' 
  );


// ------------------------------------------------
// javascript
// ------------------------------------------------
  wp_enqueue_script('jquery');
  wp_enqueue_script('ok-code-main', get_template_directory_uri(). '/js/main.js',
  array(),
  false,
  true
  );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');



// ------------------------------------------------
// アイキャッチ画像の使用
// ------------------------------------------------
add_theme_support('post-thumbnails');



// ------------------------------------------------
// 投稿の最初の画像を取得
// ------------------------------------------------
function first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];
  if(empty($first_img)){
    $first_img = '';
  }
  return $first_img;
}



// ------------------------------------------------
// 投稿のアーカイブページを作成する
// ------------------------------------------------
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'work-list'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);



// ------------------------------------------------
// ページネーションのHTMLカスタマイズ
// ------------------------------------------------
function custom_pagination_html( $template ) {
  $template = '
  <nav class="pagination" role="navigation">
      <h2 class="screen-reader-text">%2$s</h2>
      %3$s
  </nav>';
  return $template;
}
add_filter('navigation_markup_template','custom_pagination_html');



// ------------------------------------------------
// ページ表示件数の設定
// ------------------------------------------------
function custom_posts_per_page($query) {
  if(is_admin() || ! $query->is_main_query()){
      return;
  }
  // 制作実績
  if($query->is_archive('works')) {
      $query->set('posts_per_page', '6');
  }
}
add_action('pre_get_posts', 'custom_posts_per_page');



// // ------------------------------------------------
// // ogp settings
// // ------------------------------------------------
// function getOgpSettings() {
//   // フロントページ or ホーム or 単一ページなら
//   if( is_front_page() || is_home() || is_singular() ){

//       // 変数初期化
//       global $post;       // 記事情報格納変数(グローバル変数)
//       $ogpTitle = '';     // OGP用タイトル変数
//       $ogpExcerpt = '';   // OGP用概要変数
//       $ogpUrl = '';       // OGP用URL変数
//       $ogpThumbnail = ''; // OGP用サムネイル変数
//       $addTagDatas = '';  // OGP用出力タグ変数

//       // OGPのタイプを記事かトップかで切り替える
//       $ogpType = ( is_front_page() || is_home() ) ? 'website' : 'article';

//       // OGPサムネイルの設定（アイキャッチ画像を取得する）
//       if ( is_singular() && has_post_thumbnail() ) {
//           // 単一ページの場合
//           // 記事に設定しているアイキャッチを取得する(配列がデータとして返ってくる)
//           $thumbArray = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
//           // 記事に設定しているアイキャッチを取得する(配列の要素0個目に入っている画像URLを取得)
//           $ogpThumbnail = $ps_thumb[0];
//       } else {
//           // それ以外のページの場合
//           $ogpThumbnail = 'php echo get_template_directory_uri();/img/OGP.png';
//       }

//       //記事or固定ページの場合
//       if( is_singular() ) { 
//           // グローバル変数のpostに記事情報をセットする
//           setup_postdata($post);
//           // 記事タイトルを取得
//           $ogpTitle = $post->post_title;
//           // 記事概要を取得
//           $ogpExcerpt = mb_substr(get_the_excerpt(), 0, 100);
//           // 記事URLを取得
//           $ogpUrl = get_permalink();
//           // postに入った情報をリセットする
//           wp_reset_postdata();
//       //トップページの場合
//       } elseif ( is_front_page() || is_home() ) { 
//           // ブログタイトルを取得
//           $ogpTitle = get_bloginfo('name');
//           // ブログ概要を取得
//           $ogpExcerpt = get_bloginfo('description');
//           // ブログURLを取得
//           $ogpUrl = home_url();
//       }

//       //出力するOGPタグをまとめる

//       // FaceBook用OGPの設定
//       //   $addTagDatas .= '<meta property="fb:app_id" content="【app_id】">' . "\n";
//       //   $addTagDatas .= '<meta property="fb:admins" content="【admins】">' . "\n";

//       // Twitter用OGPの設定
//       $addTagDatas .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
//       $addTagDatas .= '<meta name="twitter:site" content="@okaken2022" />' . "\n";
//       $addTagDatas .= '<meta name="twitter:creator" content="@okaken2022" />' . "\n";
//       $addTagDatas .= '<meta name="twitter:title" content="'.esc_attr($ogpTitle).'" />' . "\n";
//       $addTagDatas .= '<meta name="twitter:description" content="'.esc_attr($ogpExcerpt).'" />' . "\n";
//       $addTagDatas .= '<meta name="twitter:image" content="'.esc_url($ogpThumbnail).'" />' . "\n";

//       // OGP全体の設定
//       $addTagDatas .= '<meta property="og:url" content="'.esc_url($ogpUrl).'" />' . "\n";
//       $addTagDatas .= '<meta property="og:title" content="'.esc_attr($ogpTitle).'" />' . "\n";
//       $addTagDatas .= '<meta property="og:description" content="'.esc_attr($ogpExcerpt).'" />' . "\n";
//       $addTagDatas .= '<meta property="og:image" content="'.esc_url($ogpThumbnail).'" />' . "\n";
//       $addTagDatas .= '<meta property="og:type" content="'.$ogpType.'" />' . "\n";

//       // 上記で設定したタグを出力する
//       echo $addTagDatas;
//   }
// } //END getOgpSettings
// add_action('wp_head','getOgpSettings'); //headにOGPを出力
// ?>




