<!DOCTYPE html>
<html>
<head>
<?php include(TEMPLATEPATH.'/includes/head.php'); ?>
</head>

<body>
<?php
// google tag manager (noscript)
include(TEMPLATEPATH.'/includes/analytics/google-tag-manager-noscript.php');
// site header
include(TEMPLATEPATH.'/includes/site-header.php');
// blog
if(is_singular('blog')) {
  include(TEMPLATEPATH.'/templates/singles/blog.php');
}
// site footer
include(TEMPLATEPATH.'/includes/site-footer.php');
?>
</body>
</html>
