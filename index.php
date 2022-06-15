<?php include "head.php";?>

<!DOCTYPE html>
<html>
<head>
	<title> <?php  echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" href="pract.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<div class="row">
		
		<div class='col-md-4 m-auto'>
			<div class= 'card mt-4'>
				<div class= 'card-body'>
					<?php require "process/form.php"; ?>

					<form class="form" method="POST">

						<div class='form-group'>
						<label>Surname</label>
						<input type="surname" name="surname" class="form-control">
						</div>

						<div class='form-group'>
						<label>First name</label>
						<input type="firstname" name="firstname" class="form-control">
						</div>

						<div class='form-group'>
						<label>Last Name</label>
						<input type="lastname" name="lastname" class="form-control">
						</div>

						<div class='form-group'>
						<label>Username</label>
						<input type="username" name="username" class="form-control">
						</div>


						
						<div class='form-group'>
						<label>Email</label>
						<input type="email" name="email" class="form-control">
						</div>

						<div class='form-group'>
						<label>Password</label>
						<input type="password" name="password" class="form-control">
						</div>

						
						<div class='form-group m-auto'>
						<button class="btn btn-primary btn-lg" name="register" id="register"> Register </button>
						Already register? <a href="login.php"><strong>Login </strong> </a>

						
						</div>
						
						
						
						
					</form>
					
				</div>
				

			</div>
			
		</div>

	</div>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="pract.js"></script>
</body>
</html>