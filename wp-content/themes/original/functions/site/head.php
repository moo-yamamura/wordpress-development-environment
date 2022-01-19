<?php
// generatorを非表示にする
remove_action('wp_head','wp_generator');

// EditURIを非表示にする
remove_action('wp_head','rsd_link');

// wlwmanifestを非表示にする
remove_action('wp_head','wlwmanifest_link');

// 短縮URLを非表示にする
remove_action('wp_head','wp_shortlink_wp_head');

// 絵文字用JS・CSSを非表示にする
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('admin_print_scripts','print_emoji_detection_script');
remove_action('wp_print_styles','print_emoji_styles');
remove_action('admin_print_styles','print_emoji_styles');

// 投稿の RSS フィードリンクを非表示にする
remove_action('wp_head','feed_links',2);

// コメントフィードを非表示にする
remove_action('wp_head','feed_links_extra',3);

// WordPressのバージョンが付与されたver=〜 を非表示にする
function vc_remove_wp_ver_css_js($src) {
  if (strpos($src,'ver=' . get_bloginfo('version')))
    $src = remove_query_arg('ver',$src);
  return $src;
}
add_filter('style_loader_src','vc_remove_wp_ver_css_js',9999);
add_filter('script_loader_src','vc_remove_wp_ver_css_js',9999);

// dns-prefetchを非表示にする
add_filter('wp_resource_hints','remove_dns_prefetch',10,2);
function remove_dns_prefetch($hints,$relation_type) {
  if ('dns-prefetch' === $relation_type) {
    return array_diff(wp_dependencies_unique_hosts(),$hints);
  }
  return $hints;
}

// wp versionを非表示にする
remove_action('wp_head','rest_output_link_wp_head');

// oEmbedを非表示にする
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

//rel="next" rel="prev" を非表示にする
remove_action('wp_head','adjacent_posts_rel_link_wp_head');

// Gutenberg用CSSを非表示にする
function dequeue_plugins_style() {
  wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts','dequeue_plugins_style',9999);

// canonicalタグを削除する
remove_action('wp_head','rel_canonical');

// robotsタグを削除する
remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
?>