<!-- title -->
<h1><?php the_title(); ?></h1>
<!-- /title -->
<!-- contents -->
<div>
  <?php
  $post_body = get_field('body');

  echo $post_body;
  ?>
</div>
<!-- /contents -->
<!-- pagination -->
<?php 
$previous_post = get_previous_post();
if(!empty($previous_post)):
  $previous_post_permalink = get_permalink($previous_post->ID);
?>
<a href="<?php echo $previous_post_permalink; ?>" class="prev">前の記事</a>
<?php
endif;
$post_type = get_post_type_object(get_post_type())->name;
?>
<a href="<?php echo esc_url(home_url()); ?>/<?php echo $post_type ?>/" class="list">記事一覧</a>
<?php 
$next_post = get_next_post();
if(!empty($next_post)):
  $next_post_permalink = get_permalink($next_post->ID);
?>
<a href="<?php echo $next_post_permalink; ?>" class="next">次の記事</a>
<?php endif; ?>
<!-- /pagination -->