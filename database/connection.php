<?php 

ini_set("display_errors", "on");

$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "pract";

$conn = mysqli_connect($host, $user, $db_password, $db_name) or die('Database wrongly');




if ($conn) {
	

	$db_query = "CREATE TABLE IF NOT EXISTS `pract_users`(

		`id`  INT AUTO_INCREMENT PRIMARY KEY  NOT NULL,
		`surname` VARCHAR(32) NOT NULL,
		`firstname` VARCHAR(32) NOT NULL,
		`lastname` VARCHAR(32) NOT NULL,
		`username` VARCHAR(32) NOT NULL,
		`email` VARCHAR(32) NOT NULL,
		`password` VARCHAR(32) NOT NULL,
		`order_number` VARCHAR(32) NOT NULL,
		`tracking` VARCHAR(32) NOT NULL,
		`price` VARCHAR (32) NOT NULL,
		`deactivate` VARCHAR (32) NOT NULL DEFAULT 0,
		`users_type` VARCHAR(32) NOT NULL DEFAULT 1,
		`broadcast` VARCHAR(32) NOT  NULL ,
		`date_created` TIMESTAMP NOT NULL


)";

	$db_query_result = mysqli_query($conn, $db_query);

	if ($db_query_result) {
	}
	else{
		echo mysqli_error($conn);
	}
}

 



 $table_query = "CREATE TABLE IF NOT EXISTS `users`(
 		`id`  INT AUTO_INCREMENT PRIMARY KEY  NOT NULL,
 		`name` VARCHAR(40) NOT NULL,
		`order_number` VARCHAR(32) NOT NULL,
		`tracking` VARCHAR(32) NOT NULL,
		`price` VARCHAR(32) NOT NULL
		


 )";


 $result = mysqli_query($conn, $table_query);

 if ($result) {
 	//echo "yes";
 }