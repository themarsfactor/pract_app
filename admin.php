<?php 
include "head.php";

 ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>Name</title>
 	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

 </head>
 <body>
 	<div class="row">
		
		<div class="col-lg-6 m-auto" >
			<?php include "incs/user_data.php";

				echo "Welcome ".$firstname. " ".$username;
			?>
			<hr>

			<ul>
				<li><a href="">Update profile</a></li>
				<li><a href="">Create user</a></li>
				<li><a href="userlist.php">Manage user</a></li>
				<li><a href="roles.php">Manage roles</a></li>
				<li><a href="logout.php">Log out</a></li>

				
			</ul>
		
			</div>





			
				
			</div>

			<div class= 'col-md-4 m-auto'>
				<?php 
				require "function/functions.php";
				require "process/form.php"; 

				?>
				
				<form method="POST">
					<label>broadcast</label>
					<input type="text" name="broadcast">
					<button name="submit">submit</button>
					

				</form>
			</div>
			
		

		
		<div class='col-md-4 m-auto'>
			<div class="col-2">
			<?php
				 getUsers();
			?>
		</div>

		<div id="page-modals"></div>

			<div class= 'card my-auto baby' id="myopen">
				<div class='card-header bg-info'> Login
					<div> <?php require "process/form.php";?></div>
				</div>
				
			</div>
		</div>

	<script type="text/javascript" src="jquery.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script>

		
		function openProduct(user_id, firstname){
			//alert(user_id);
		
			$.get({

				url : "loaders/getUser.php",
				data : {user_id: user_id},

				success : function(feedback){
					//console.log(user_id);

					feedback = JSON.parse(feedback);
					//console.log(feedback);






const staticBackdrop = `<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">${feedback['surname']}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<form class ='form' method='POST'>
        	<div class ="col-md-6">
        	<div class = "form-group">
        	<label>Order Number</label>
        	<input type ='test' placeholder='enter Order Number' name='order_number' id = 'order_number' class='form-control'>
        	</div>

        	<div class = "form-group">
        	<label>Tracking Number</label>
        	<input type ='test' placeholder='enter Tracking Number' id = 'tracking' name='tracking' class='form-control'>
        	</div>

        	<div class = "form-group">
        	<label>Price</label>
        	<input type ='test' placeholder='enter price' id ='price' name='price' class='form-control'>
        	</div>
        	
        	
        	</div
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" type= 'reset'>Reset</button>
        <button class="btn btn-primary" type='button' data-dismiss="modal" name='create' onclick='updateUser(${feedback['id']})'>create</button>
      </div>
      </div>
    </div>
  </div>
</div>`;
		
		$("#page-modals").html(staticBackdrop);

			$("#staticBackdrop").modal("show");


				}
		})
		




		};





		function updateUser(id){
			console.log(id);
		const order_number = document.getElementById("order_number").value;
		const tracking = document.getElementById("tracking").value;
		const price = document.getElementById("price").value;

			$.post({

					url : "loaders/loader.php",
					data : {id: id, order_number: order_number, tracking: tracking, price: price},
					success : function(feedback){
						console.log(feedback);

						//feedback = JSON.parse(feedback);
					}

			})

		}
	</script>
</body>
</html>
