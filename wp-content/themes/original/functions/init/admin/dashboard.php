<?php
// ウィジットを非表示にする
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  
  if(!current_user_can('administrator')) {
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // 現在の状況
  }
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']); // アクティビティ
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // 最近のコメント
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // 被リンク
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // プラグイン
  //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']); // サイトヘルス
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // クイック投稿
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // 最近の下書き
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPressブログ
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // WordPressフォーラム
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
remove_action( 'welcome_panel', 'wp_welcome_panel' ); // ようこそ！

// オリジナルウィジットを追加する
function custom_dashboard_widgets() {
  global $wp_meta_boxes;

  wp_add_dashboard_widget('widget_support','サポート','widget_support_contents');
  function widget_support_contents() {
    echo '
      <div><img src="'.get_template_directory_uri().'/admin/assets/img/logo_karabiner.png" alt="カラビナテクノロジー" width="315"></div>
      <p><b>会社名：</b>カラビナテクノロジー株式会社<br>
        <b>所在地：</b>〒810-0004 福岡県福岡市中央区渡辺通5-23-8 サンライトビル 3F<br>
        <b>電話番号：</b>092-733-6655<br>
        <b>メールアドレス：</b>frontdev@karabiner.tech</p>
    ';
  }
}
add_action('wp_dashboard_setup','custom_dashboard_widgets');
?>