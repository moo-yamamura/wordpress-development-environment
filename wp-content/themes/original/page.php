<!DOCTYPE html>
<html>
<head>
<?php include(TEMPLATEPATH.'/includes/head.php'); ?>
</head>

<body>
<?php
include(TEMPLATEPATH.'/includes/header.php');

// underlayer
if(is_page('underlayer')) {
  include(TEMPLATEPATH.'/templates/pages/underlayer.php');
}

include(TEMPLATEPATH.'/includes/footer.php');
?>
</body>
</html>
