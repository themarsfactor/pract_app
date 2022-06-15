<?php

$page_path = $_SERVER['REQUEST_URI'];
$page = basename($page_path);
$page_box = explode(".", $page);
$page_title = ucfirst($page_box[0]);




?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
</head>
<body>


</body>
</html>