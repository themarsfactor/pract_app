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
 		<?php include "incs/user_data.php"; ?>
		
		<div class='col-md-4 m-auto'>
			<div class= 'card my-auto'>
				<div class='card-header bg-info'>
				<?php 
				require "function/functions.php";
				 echo "Welcome   ". " ". $firstname;

					getProducts($id);

					broadcast($id);



				 ?> 

	
				</div>
				<div class= 'card-body '>
					<a href="logout.php"> logout</a>

					

					<form class="form" method="POST">
						

						
						
						
						
					</form>

					<div>
						
					</div>
					
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