<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<style type="text/css">
	body{
		background-image: url("img/SysAdmin_computer_programmer_admin_administrator-1920x1080.jpg");
	}
</style>
<body >


	<div class="" align="right">
		        <a href="signup.php" class="btn btn-success btn-lg">Logout</a>
				
	</div>

	<br><br><br>

		<h2 align="center" style="color: black">HI creator!!</h2>
	
        <br>
		<h3 align="center" style="color: black">what you would like to do??</h3><br>
			
	
</div>
<br><br><br>
<form>
	<div class="" align="center">
		        <a href="admininsert.php" class="btn btn-success btn-lg ">ADD BOOK</a><br><br>
				<a href="admindelete.php" class="btn btn-success btn-lg ">DELETE A BOOK</a><br><br>
				<a href="adminupdate.php" class="btn btn-success btn-lg ">UPDATE A BOOK</a>

	</div>
</form>
<?php

?>
</body>
</html>




