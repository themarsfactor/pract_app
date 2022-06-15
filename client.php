<?php
include "incs/user_data.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>client</title>
</head>
<body>
	<?php 
	require "function/functions.php";
		get_all_users($firstname, $lastname);


	?>

</body>
</html>