<?php
require "function/functions.php";
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

	$user_id = (int)$_GET['id'];

	$user_id = deactivate($user_id);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>deactivate</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-4 m-auto">
			<div class="card">

				<div class="card-head">
					<?php 
					echo "{$user_id} The user has been deactivated";

					?>

					
				</div>
				<div class="card body bg-secondary">
					
				</div>
				
			</div>
			
		</div>
		
	</div>
</div>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>