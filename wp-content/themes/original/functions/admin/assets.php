<?php
// アセットファイルを追加する
function add_admin_assets() {
  wp_enqueue_style('admin_dashboard',get_template_directory_uri().'/admin/assets/css/dashboard.css');
}
add_action('admin_enqueue_scripts','add_admin_assets');
?>