<!DOCTYPE html>
<html>
<head>
<?php
// google tag manager
include(TEMPLATEPATH.'/includes/analytics/google-tag-manager.php');
// head
include(TEMPLATEPATH.'/includes/head.php');
?>
</head>

<body>
<?php
// google tag manager (noscript)
include(TEMPLATEPATH.'/includes/analytics/google-tag-manager-noscript.php');
// site header
include(TEMPLATEPATH.'/includes/site-header.php');
// underlayer
if(is_page('underlayer')) {
  include(TEMPLATEPATH.'/templates/pages/underlayer.php');
}
// site footer
include(TEMPLATEPATH.'/includes/site-footer.php');
?>
</body>
</html>
