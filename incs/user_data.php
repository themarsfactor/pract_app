<?php 
session_start();

if (!isset($_SESSION['email'])) {
	header("location: login.php");
	exit();
	# code...
}
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$firstname =$_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
