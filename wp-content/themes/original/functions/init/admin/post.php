<?php
// 本文入力部分を非表示にする
function remove_wysiwyg() {
  remove_post_type_support('page','editor');
  remove_post_type_support('blog','editor');
}
add_action('init','remove_wysiwyg');
?>