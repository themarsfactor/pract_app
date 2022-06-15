<?php include "head.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class='row'>
		<?php include "incs/user_data.php";  ?>
			
			<div class='col-md-6 m-auto'>
				<div class="card my-auto">
					<div class='card-head bg-info'>
					<strong>Welcome <?php echo "{$_SESSION['firstname']}!"; ?> </strong>
					<a href='posts.php' class='btn btn-sm btn-primary'>Create Role</a>
					<a href='logout.php' class='btn btn-sm btn-primary'> Log out</a>
					</div><hr>

					<div class="card-body">
					please
						
					</div>
					</div>
					

				</div>
			</div>
			<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>