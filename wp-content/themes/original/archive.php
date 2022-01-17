<!DOCTYPE html>
<html>
<head>
<?php include(TEMPLATEPATH.'/includes/head.php'); ?>
</head>

<body>
<?php
include(TEMPLATEPATH.'/includes/header.php');

// blog
if(is_post_type_archive('blog')) {
  include(TEMPLATEPATH.'/templates/archives/blog.php');
}

include(TEMPLATEPATH.'/includes/footer.php');
?>
</body>
</html>
