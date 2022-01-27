<!DOCTYPE html>
<html>
<head>
<?php include(TEMPLATEPATH.'/includes/analytics/google-tag-manager.php'); ?>
<?php include(TEMPLATEPATH.'/includes/head.php'); ?>
</head>

<body>
<?php include(TEMPLATEPATH.'/includes/analytics/google-tag-manager-noscript.php'); ?>
<?php include(TEMPLATEPATH.'/includes/site-header.php'); ?>
<?php
// blog
if(is_post_type_archive('blog')) {
  include(TEMPLATEPATH.'/templates/archives/blog.php');
}
?>
<?php include(TEMPLATEPATH.'/includes/site-footer.php'); ?>
</body>
</html>
