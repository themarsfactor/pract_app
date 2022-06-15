<?php 
require "../function/functions.php";
if (isset($_GET['user_id']) && is_numeric($_GET['user_id'])) {

	$user_id = (int)$_GET['user_id'];

	$user = getUser($user_id);

	$user = json_encode($user);
	
	echo $user;
}


 ?>