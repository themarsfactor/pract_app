<?php 
require "../function/functions.php";
if (isset($_POST['id']) && is_numeric($_POST['id'])) {

	$order_number = trim($_POST['order_number']);
	$tracking = trim($_POST['tracking']);
	$price = trim($_POST['price']);

	$user = (int)$_POST['id'];

	$user = updateUser($user, $order_number, $tracking, $price);

	$user = json_encode($user);
	
	echo $user;
}


 ?>