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

?>


