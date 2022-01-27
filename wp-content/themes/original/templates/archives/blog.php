<!-- blog list -->
<main class="mainContents mainContents--blogList">
  <h1>ブログ一覧</h1>
  <!-- list -->
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // ページネーションの判定
  $args = array(
    'post_type'      => 'blog', // 投稿タイプ
    'post_status'    => 'publish', // 公開状態
    'posts_per_page' => 1, // 表示件数
    'orderby'        => 'date', // 投稿の並び
    'order'          => 'DESC', // 昇順(ASC)か降順(DESC)
    'paged'          => $paged, // ページネーション
  );
  $wp_query = new WP_Query($args);

  if($wp_query->have_posts()):
    while($wp_query->have_posts()):
      $wp_query->the_post();
  ?>
  <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  <?php
    endwhile;
    wp_reset_postdata();
  else:
  ?>
  <p><?php echo esc_html('投稿がありません'); ?></p>
  <?php endif; ?>
  <!-- /list -->
  <!-- pagination -->
  <?php
  global $wp_rewrite;
  $paginate_base = get_pagenum_link(1);

  if(strpos($paginate_base,'?') || ! $wp_rewrite->using_permalinks()){
    $paginate_format = '';
    $paginate_base = add_query_arg('paged','%#%');
  }
  else{
    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
    user_trailingslashit('page/%#%/','paged');;
    $paginate_base .= '%_%';
  }

  echo paginate_links(array(
    'base'      => $paginate_base,
    'format'    => $paginate_format,
    'total'     => $wp_query->max_num_pages,
    'mid_size'  => 4,
    'current'   => ($paged ? $paged : 1),
    'prev_text' => '« 前へ',
    'next_text' => '次へ »',
  ));
  ?>

  <!-- /pagination -->
</main>
<!-- /blog list -->
