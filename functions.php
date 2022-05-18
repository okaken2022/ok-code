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
?>