<?php
// メニューを非表示にする
function remove_admin_bar_menu_control( $wp_admin_bar ) {
  $wp_admin_bar->remove_menu('wp-logo'); // WordPressロゴ
  // $wp_admin_bar->remove_menu('site-name'); // サイト名
  $wp_admin_bar->remove_menu('view-site'); // サイト名 → サイトを表示
  $wp_admin_bar->remove_menu('comments'); // コメント
  // $wp_admin_bar->remove_menu('updates'); // 更新
  // $wp_admin_bar->remove_menu('view'); // 投稿を表示
  $wp_admin_bar->remove_menu('new-content'); // 新規
  $wp_admin_bar->remove_menu('new-post'); // 新規 → 投稿
  $wp_admin_bar->remove_menu('new-media'); // 新規 → メディア
  $wp_admin_bar->remove_menu('new-link'); // 新規 → リンク
  $wp_admin_bar->remove_menu('new-page'); // 新規 → 固定ページ
  $wp_admin_bar->remove_menu('new-user'); // 新規 → ユーザー
  // $wp_admin_bar->remove_menu('my-account'); // マイアカウント
  // $wp_admin_bar->remove_menu('user-info'); // マイアカウント → プロフィール
  // $wp_admin_bar->remove_menu('edit-profile'); // マイアカウント → プロフィール編集
  // $wp_admin_bar->remove_menu('logout'); // マイアカウント → ログアウト
}
add_action('admin_bar_menu','remove_admin_bar_menu_control', 111);
?>