<!DOCTYPE html>
<html>
<head>
<?php include(TEMPLATEPATH.'/includes/head.php'); ?>
</head>

<body>
<?php
include(TEMPLATEPATH.'/includes/header.php');

// blog
if(is_singular('blog')) {
  include(TEMPLATEPATH.'/templates/singles/blog.php');
}

include(TEMPLATEPATH.'/includes/footer.php');
?>
</body>
</html>
