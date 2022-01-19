<?php
// メニューを非表示にする
function remove_menus() {
  // ダッシュボード
  // remove_menu_page('index.php');
  // remove_submenu_page('index.php','index.php'); // ホーム
  // remove_submenu_page('index.php','update-core.php'); // 更新

  // 投稿
  remove_menu_page('edit.php');
  // remove_submenu_page('edit.php','edit.php'); // 投稿一覧
  // remove_submenu_page('edit.php','post-new.php'); // 新規追加
  // remove_submenu_page('edit.php','edit-tags.php?taxonomy=category'); // カテゴリー
  // remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag'); // タグ

  // メディア
  // remove_menu_page('upload.php'); 
  // remove_submenu_page('upload.php','upload.php'); // ライブラリ
  // remove_submenu_page('upload.php','media-new.php'); // 新規追加

  // 固定
  // remove_menu_page('edit.php?post_type=page');
  // remove_submenu_page('edit.php?post_type=page','edit.php?post_type=page'); // 固定ページ一覧
  // remove_submenu_page('edit.php?post_type=page','post-new.php?post_type=page'); // 新規追加

  // コメント
  remove_menu_page('edit-comments.php');

  // 外観
  // remove_menu_page('themes.php');
  // remove_submenu_page('themes.php','themes.php'); // テーマ
  remove_submenu_page('themes.php','customize.php?return='.rawurlencode($_SERVER['REQUEST_URI'])); // カスタマイズ
  remove_submenu_page('themes.php','nav-menus.php'); // メニュー
  remove_submenu_page('themes.php','widgets.php'); // ウィジェット
  remove_submenu_page('themes.php','theme-editor.php'); // テーマエディタ

  // プラグイン
  // remove_menu_page('plugins.php'); 
  // remove_submenu_page('plugins.php','plugins.php'); // インストール済みプラグイン
  // remove_submenu_page('plugins.php','plugin-install.php'); // 新規追加
  // remove_submenu_page('plugins.php','plugin-editor.php'); // プラグインエディタ

  // ユーザー
  // remove_menu_page('users.php');
  remove_submenu_page('users.php','users.php'); // ユーザー一覧
  remove_submenu_page('users.php','user-new.php'); // 新規追加
  remove_submenu_page('users.php','profile.php'); // あなたのプロフィール

  // プロフィール
  remove_menu_page('profile.php');

  // ツール
  if(!current_user_can('administrator')) {
    remove_menu_page('tools.php');
  }
  remove_submenu_page('tools.php','tools.php'); // 利用可能なツール
  remove_submenu_page('tools.php','import.php'); // インポート
  remove_submenu_page('tools.php','export.php'); // エクスポート
  //remove_submenu_page('tools.php','site-health.php'); // サイトヘルス
  remove_submenu_page('tools.php','export-personal-data.php'); // 個人データのエクスポート
  remove_submenu_page('tools.php','erase-personal-data.php'); // 個人データの消去

  // 設定
  //remove_menu_page('options-general.php');
  // remove_submenu_page('options-general.php','options-general.php'); // 一般
  // remove_submenu_page('options-general.php','options-writing.php'); // 投稿設定
  // remove_submenu_page('options-general.php','options-reading.php'); // 表示設定
  remove_submenu_page('options-general.php','options-discussion.php'); // ディスカッション
  // remove_submenu_page('options-general.php','options-media.php'); // メディア
  // remove_submenu_page('options-general.php','options-permalink.php'); // パーマリンク
  // remove_submenu_page('options-general.php','options-privacy.php'); // プライバシー
}
add_action('admin_menu','remove_menus', 999 );
?>