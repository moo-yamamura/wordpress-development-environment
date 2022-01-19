<?php
// 管理画面
get_template_part('functions/admin/toolbar'); // 管理ツールバー
get_template_part('functions/admin/sidemenu'); // サイドメニュー
get_template_part('functions/admin/dashboard'); // ダッシュボード
get_template_part('functions/admin/post'); // 投稿画面
get_template_part('functions/admin/assets'); // アセットファイル

// カスタムフィールド
get_template_part('functions/admin/custom-field/meta'); // meta情報

// サイト
get_template_part('functions/site/toolbar'); // 管理ツールバー
get_template_part('functions/site/head'); // headタグ内
get_template_part('functions/site/assets'); // アセットファイル
?>