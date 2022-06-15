<?php 

function registerUser($surname, $firstname, $lastname, $username, $email, $password){

	require "database/connection.php";

	$response = checkUserExist($username, $email);
	if ($response == 1) {
		echo "User registered already";
		# code...
	}
	else{

		$register_query = "INSERT INTO `pract_users` (surname, firstname, lastname, username, email, password, date_created)  VALUES('$surname', '$firstname', '$lastname', '$username', '$email', md5('$password'), NOW())";

		$register_result = mysqli_query($conn, $register_query);

		if ($register_result) {
			//$last_id = mysqli_insert_id($conn);
			//session_start();

			//$_SESSION = $last_id;

			echo "Uesr register successfully";
			
			# code...*/
			
		}
		else{
			echo mysqli_error($conn);
		}
	}
} 


function checkUserExistsWithPassword($username, $password){

	require "database/connection.php";
 	$query = "SELECT * FROM `pract_users` WHERE `username` = '$username' AND `password` = md5('$password') LIMIT 1";

 	$query_result = mysqli_query($conn, $query);
 	if ($query_result) {

 	if (mysqli_num_rows($query_result)==1) {
 			return 1;
 		}else{
 			return 0;
 		}	
 	}

}
 


 function checkUserExist($username, $email){

 	require "database/connection.php";
 	$query = "SELECT * FROM `pract_users` WHERE `username` = '$username' AND `email` = '$email' LIMIT 1";

 	$query_result = mysqli_query($conn, $query);
 	if ($query_result) {

 	if (mysqli_num_rows($query_result)==1) {
 			return 1;
 		}	
 	}
 }


 


 

 function loginUsers($username, $password){
 	require "database/connection.php";
 	$username = mysqli_real_escape_string($conn, trim($username));
 	$password = mysqli_real_escape_string($conn, trim($password));


 	//check if the user exists 

 	$check = checkUserExistsWithPassword($username, $password);

 	//die($check);

 	if($check == 1){
 				$login_query = "SELECT * FROM `pract_users` WHERE `username` = '$username' AND      
 	`password` = md5('$password') AND `deactivate` = 0 LIMIT 1";
 	$login_result = mysqli_query($conn, $login_query);

 	if ($login_result) {
 		if (mysqli_num_rows($login_result) == 1) {	


 			session_start();
 			$_SESSION = mysqli_fetch_array($login_result, MYSQLI_ASSOC);
 					
 					/*if ($_SESSION['deactivate']==1) {
 						die('Your account is blacklisted');
 						# code...
 					}*/

 			if ($_SESSION['users_type']==1) {

 				header("location: user.php");
 			}
 			elseif($_SESSION['users_type']==2){

 				header("location: admin.php");
 			}			
 		}
 		else{
 			header("location: blacklist_message.php");
 			//echo "<div class='alert alert-danger' style = 'margin-top: 10px;'> The account has been blacklisted </div>";
 		}
 	}
 	else{
 		echo mysqli_error($conn);
  	
}


 	}else{

 		//the user does not exist
 		echo "Username/Password combination not correct";
 	}

 


 }


 function get_all_users($firstname, $lastname){
 	require "database/connection.php";

 	$query = "SELECT * FROM `pract_users`";
 	$result = mysqli_query($conn, $query);

 	if ($result) {

 			echo "<table class='table'>
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
				";

		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$u_user_id = $row['id'];
					$f_firstname = $row['firstname'];
					$l_lastname = $row['lastname'];

					echo "<tr>
								<td>{$f_firstname}</td>
								<td>{$l_lastname}</td>
								<td><a href='deactivate_user.php?id={$u_user_id}'>deactivate user</a></td>

							</tr>";


		}
		echo "</tbody></table>";


 	}
 	else{
 		echo mysqli_error($conn);
 	}

 }



 function deactivate($user_id){
 	require "database/connection.php";
 	$query = "UPDATE `pract_users` SET `deactivate` = '1' WHERE `id` = '$user_id' LIMIT 1";
 	$result = mysqli_query($conn, $query);
 	if ($result) {
 	return true;
 	}
 	else{
 		return false;
 	}
 }


 function productReg ($name, $order_number, $tracking, $price){

 	require "database/connection.php";
 	$response = checkProduct($name, $order_number);

 	if ($response == true) {
 		echo " product exist";
 		# code...
 	}
 	else{
 		$query_product = "INSERT INTO users (name, order_number, tracking, price) VALUES ('$name', '$order_number', '$tracking', '$price')";

 		$result = mysqli_query($conn, $query_product);
 		if ($result) {
 			echo "successful";
 		}
 		else{
 			echo mysqli_error($conn);
 		}
 	}
 }





function checkProduct($name, $order_number){
require "database/connection.php";
$query = "SELECT * FROM `pract_users` WHERE name = '$name' AND name = '$name' LIMIT 1";

$result = mysqli_query($conn, $query);

if ($result) {
	if (mysqli_num_rows ($result) == 1) {
		return true;
	}
	else{
		return false;
	}
}else{
	mysqli_error($conn);
}

}






function getProducts($id){
	require "database/connection.php";
	//$l_id = $_SESSION['last_id'];

	$query = "SELECT * FROM pract_users WHERE id = '$id' LIMIT 1";
	$result = mysqli_query($conn, $query);

	if ($result) {

		echo "<table class='table'>
				<thead>
					<tr>
						<th>order Number</th>
						<th>Tracking Number</th>
						<th>Price</th>
						<th>Broadcast</th>
					</tr>
				</thead>
				<tbody>
				";
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$order_number= $row['order_number'];
					$tracking = $row['tracking'];
					$price = $row['price'];
					$broadcast = $row['broadcast'];

					echo "<tr>								
								<td>{$order_number}</td>
								<td>{$tracking}</td>
								<td>{$price}</td>
								<td>{$broadcast}</td>

							</tr>";


		}
		echo "</tbody></table>";


 	}

		# code...
	}


	function getUsers(){

		require "database/connection.php";

		$query = "SELECT * FROM `pract_users`";
		$result = mysqli_query($conn, $query);

		if ($result) {
			
			echo "<table class = 'table'>
						<tbody>";

					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
						
						$surname = $row['surname'];
						$firstname = $row['firstname'];
						$user_id = $row['id'];

					echo "<tr>

							<td> {$surname}</td>
							<td><button class='btn btn-info' type= 'button' onclick = openProduct({$user_id},\"{$firstname}\")> update</button></td>
							


					      </tr>";
					}
					echo "</tbody></table>";
		}

	}






	function updateUser($id, $order_number, $tracking, $price){
		require "../database/connection.php";
		$query = "UPDATE pract_users SET `order_number` = '$order_number', `tracking` = '$tracking', `price` = '$price' WHERE `id` = $id LIMIT 1";
		$result = mysqli_query($conn, $query);

		if ($result) {

			return [
						'message' => "user updated",
						'code'=> "success",
						'status'=> 201
						];
			# code...
		}
		else{
				return[
						'message' => mysqli_error($conn),
						'code' => "success",
						'status'=> 400


						];
		}

	}





	function getUser($user_id){

		require "../database/connection.php";
		$query = "SELECT * FROM pract_users WHERE `id` = $user_id LIMIT 1";


	$result = mysqli_query($conn, $query);

	if($result){
		//check the existence
		if(mysqli_num_rows($result) == 1){
			
			$user_info = mysqli_fetch_array($result, MYSQLI_ASSOC);

				return ($user_info);

		}else{

			echo 'Error';

		}
	}
	}

 	  



 	  function broadcastAll($broadcast){

 	  	require "database/connection.php";

 	  	$query = "INSERT INTO `pract_users`(broadcast) VALUES('$broadcast')";
 	  	$result = mysqli_query($conn, $query);
 	  	if ($result) {


 	  		echo "success";
 	  		# code...
 	  	}
 	  	else{
 	  		echo mysqli_error($conn);
 	  	}
 	  }



 	  
 	  function broadcast($id){
	require "database/connection.php";
	//$l_id = $_SESSION['last_id'];

	$query = "SELECT * FROM pract_users WHERE id = '$id' LIMIT 1";
	$result = mysqli_query($conn, $query);

	if ($result) {

		echo "<table class='table'>
				<thead>
					<tr>
						<th>Broadcast</th>
					</tr>
				</thead>
				<tbody>
				";
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					
					$broadcast = $row['broadcast'];

					echo "<tr>					
								<td>{$broadcast}</td>

							</tr>";


		}
		echo "</tbody></table>";


 	}

		# code...
	}







 	  