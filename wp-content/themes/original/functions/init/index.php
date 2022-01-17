<?php
  // 管理画面
  get_template_part('functions/init/admin/toolbar'); // 管理ツールバー
  get_template_part('functions/init/admin/sidemenu'); // サイドメニュー
  get_template_part('functions/init/admin/dashboard'); // ダッシュボード
  get_template_part('functions/init/admin/post'); // 投稿画面
  get_template_part('functions/init/admin/assets'); // アセットファイル

  // カスタムフィールド
  get_template_part('functions/init/admin/custom-field/meta'); // meta情報

  // サイト
  get_template_part('functions/init/site/toolbar'); // 管理ツールバー
  get_template_part('functions/init/site/head'); // headタグ内
?>