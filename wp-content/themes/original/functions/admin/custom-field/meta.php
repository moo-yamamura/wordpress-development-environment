<?php
//カスタムフィールドのメタボックス
function add_meta_fields() {
  add_meta_box('meta','meta情報','insert_meta_fields',['page','blog'],'normal');
}
add_action('admin_menu','add_meta_fields');
 
//カスタムフィールドの入力エリア
function insert_meta_fields() {
  global $post;

  $metaTitle = get_post_meta($post->ID,'meta_title',true);

  if(empty($metaTitle)) {
    $metaTitle = get_the_title();
  }

  $metaDescription = get_post_meta($post->ID,'meta_description',true);

  echo '
    <style>
      #meta .handle-actions {
        display: none;
      }
      .metaInput {
        display: flex;
        align-items: center;
      }
      .metaInput__caption {
        width: 100px;
      }
      .metaInput__caption--bold {
        font-weight: bold;
      }
      .metaInput__input {
        flex: 1;
      }
    </style>
    <div class="metaInput">
      <p class="metaInput__caption">
        <span class="metaInput__caption--bold">タイトル</span><br>
        (40文字以内)
      </p>
      <input type="text" name="meta_title" value="'.$metaTitle.'" maxlength="40" class="metaInput__input" id="js-metaTitleInput">
    </div>
    <div class="metaInput">
      <p class="metaInput__caption">
        <span class="metaInput__caption--bold">説明</span><br>
        (100文字以内)
      </p>
      <textarea name="meta_description" maxlength="100" class="metaInput__input">'.$metaDescription.'</textarea>
    </div>
    <script>
      var metaPostbox = document.getElementById("meta");
      var postTitleBox = document.getElementById("titlediv");

      postTitleBox.parentNode.insertBefore(metaPostbox,postTitleBox.nextSibling);

      var postTitleInput = document.getElementById("title");
      var metaTitleInput = document.getElementById("js-metaTitleInput");

      postTitleInput.addEventListener("keyup",() => {
        var inputValue = postTitleInput.value;

        metaTitleInput.value = inputValue;
      });
    </script>
  ';
}
 
//カスタムフィールドの値を保存
function save_meta_fields($post_id) {
  if(!empty($_POST['meta_title'])) {
    update_post_meta($post_id,'meta_title',$_POST['meta_title']);
  } else {
    update_post_meta($post_id,'meta_title',get_the_title());
  }

  if(!empty($_POST['meta_description'])) {
    update_post_meta($post_id,'meta_description',$_POST['meta_description']);
  } else {
    delete_post_meta($post_id,'meta_description');
  }
}
add_action('save_post','save_meta_fields');
?>