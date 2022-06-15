<?php 

if (isset($_POST['register'])) {


	$surname = trim($_POST['surname']);
	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	$errors = [];




	if (empty($surname)) {
		$errors[] = "Enter surnmae";
	}

	if (empty($firstname)) {
		$errors[] = "Enter firstname";
	}
	
	if (empty($lastname)) {
		$errors[] = "Enter lastname";
	}

	if (empty($username)) {
		$errors[] = "Enter username";
		# code...
	}
	if (empty($email)) {
		$errors[] = "Enter email";
		# code...
	}

	if (empty($password)) {
		$errors[] = "Enter password";
	}

	if (empty($errors)) {
		require "function/functions.php";
		$feedback = registerUser($surname, $firstname, $lastname, $username, $email, $password);
		echo $feedback;
		# code...
	}else{
		foreach ($errors as $error) {
			echo "<div class= 'error'>{$error} </div>";
		}
	}
}
 



if (isset($_POST['login'])) {


	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$errors = [];



	if (empty($username)) {
		$username = "Enter username";
		# code...
	}

	if (empty($password)) {
		$password = "Enter password";
	}

	if (empty($errors)) {
		require "function/functions.php";
		$feedback = loginUsers($username, $password);
		echo $feedback;
	}
		else{
			foreach ($errors as $error) {
				echo "{$error}";
			}
		}
}



if (isset($_POST['create'])) {



	$name = trim($_POST['name']);
	$order_number = trim($_POST['order_number']);
	$tracking = trim($_POST['tracking']);
	$price = trim ($_POST['price']);


	$errors = [];

	if (empty($name)) {
		$errors[] = 'enter name';
	}

	if (empty($order_number)) {
		$errors[] = 'enter order number';
	}

	if (empty($tracking)) {
		$errors[] = 'enter tracking number';
	}

	if (empty($price)) {
		$errors[] = 'enter price';
	}

	if (empty($errors)) {

		//require "function/functions.php";

		$feedback = productReg($name, $order_number, $tracking, $price);
		echo $feedback;
		# code...
	}
	else{

		foreach ($errors as $error) {
			echo "{$error}<br>";
		}
	}
	
	
	
	# code...
}



if (isset($_POST['submit'])) {

	$broadcast = trim($_POST['broadcast']);

	$errors = [];




	if (empty($broadcast)) {
		$errors[] = "enter something";
	}

	if (empty($errors)) {
		//require "function/functions.php";
		$feedback = broadcastAll($broadcast);

		echo $feedback;
	}
	else{
		foreach ($errors as $error) {
			# code...
		}
		echo "{$error}";
	}


	# code...
}