<?php
// 概要にカスタム投稿タイプの投稿件数を追加する
add_filter('dashboard_glance_items','add_dashboard_glance_items');
function add_dashboard_glance_items($elements) {
  $post_tyeps = array(
    'blog',
  );

  foreach ($post_tyeps as $post_type) {
    $num_posts = wp_count_posts($post_type);

    if ($num_posts && $num_posts->publish) {
      $post_type_object = get_post_type_object($post_type);
      $post_type_label = $post_type_object->label;
      $text = number_format_i18n($num_posts->publish).'件の'.$post_type_label.'の投稿';
      $elements[] = sprintf('<a href="edit.php?post_type=%1$s" class="%1$s-count">%2$s</a>', $post_type, $text);
    }
  }
  return $elements;
} 
?>