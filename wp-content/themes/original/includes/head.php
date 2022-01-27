<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<?php
// meta
$blog_info_name = get_bloginfo('name');

if (is_front_page()) {
  $meta_title = $blog_info_name;
  $meta_description = get_bloginfo('description');
// アーカイブテンプレート
} else if(is_post_type_archive('blog')) {
  $meta_title = 'ブログ一覧 | '.$blog_info_name;
  $meta_description = 'ブログ一覧の説明';
// 投稿テンプレート, 固定ページ
} else {
  $page_id = get_the_ID();
  $post_title = get_post_meta($page_id,'meta_title',true);
  $meta_title = $post_title.' | '.$blog_info_name;
  $meta_description = get_post_meta($page_id,'meta_description',true);
  if(empty($meta_description)) {
    $meta_description = get_bloginfo('description');
  }
}

$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<title><?php echo $meta_title ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
<!-- Facebook OGP -->
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $meta_title ?>">
<meta property="og:description" content="<?php echo $meta_description; ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/ogp.png">
<meta property="og:site_name" content="<?php echo $blog_info_name; ?>">
<!-- /Facebook OGP -->
<!-- Twitter card -->
<meta name="twitter:url" content="<?php echo $url; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $meta_title ?>">
<meta name="twitter:description" content="<?php echo $meta_description; ?>">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/ogp.png">
<!-- /Twitter card -->
<!-- icon -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
<!-- /icon -->
<!-- url normalization -->
<link rel="canonical" href="<?php echo $url; ?>">
<!-- /url normalization -->
<!-- structured data -->
<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"website",
  "name":"<?php echo $blog_info_name; ?>",
  "inLanguage":"jp",
  "publisher": {
  "@type": "Organization",
  "logo": {
    "@type": "ImageObject",
    "url": "<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png"
  }},
  "copyrightYear":"2021-01-01T00:00:00+0000",
  "headline":"<?php echo $meta_title ?>",
  "description":"<?php echo $meta_description; ?>",
  "url":"<?php echo $url; ?>"
}
</script>
<!-- /structured data -->
<?php wp_head(); ?>
