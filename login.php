<?php
include "head.php";
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

 </head>
 <body>
 	<div class="row">
 		<?php 
 		ini_set("displays_error", "on");
 		
 		if (isset($_SESSION['email'])) {
 			header("location:user.php");
 			exit();
 			# code...
 		}

 		 ?>
		
		<div class='col-md-4 m-auto'>
			<div class= 'card my-auto'>
				<div class='card-header bg-info'> Login
					<div> <?php require "process/form.php";?></div>
				</div>
				<div class= 'card-body'>

					<form class="form" method="POST">
						

						
						<div class='form-group'>
						<label>Username</label>
						<input type="username" name="username" class="form-control" required="" >
						</div>

						<div class='form-group'>
						<label>Password</label>
						<input type="password" name="password" class="form-control" required="">
						</div>

						
						<div class='form-group m-auto'>
						<button class="btn btn-primary btn-lg" name="login" id="login"> Login </button>
						Not registered yet? <a href="index.php"><strong>Register here</strong> </a>

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

 
 </body>
 </html>