<?php
// アセットファイルを追加する
function add_site_assets() {
   $directory = get_template_directory_uri();

  // main
  wp_enqueue_style('main',$directory.'/assets/css/main.css',null,null);
  wp_enqueue_script('main',$directory.'/assets/js/main.js',null,null,true);

  // top
  if(is_front_page()) {
    wp_enqueue_style('top',$directory.'/assets/css/top.css',null,null);
    wp_enqueue_script('top',$directory.'/assets/js/top.js',null,null,true);
  }
}
add_action('wp_enqueue_scripts', 'add_site_assets');
?>