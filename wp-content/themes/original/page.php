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
// underlayer
if(is_page('underlayer')) {
  include(TEMPLATEPATH.'/templates/pages/underlayer.php');
}
?>
<?php include(TEMPLATEPATH.'/includes/site-footer.php'); ?>
</body>
</html>
