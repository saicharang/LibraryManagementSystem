<?php
require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>
<body>
	<div class="height1">
	</div>
	<div class="height">
    	<form method="post" action="">
    		<div align="center">


				<label for="exampleInputEmail1">Please enter your username</label><br>
    			<div class="form-group">
    			<input type="text" class="form-control" name="username" placeholder="" required>
  				</div>

    			<label for="exampleInputEmail1">Please enter your new password</label><br>
    			<div class="form-group">
    			<input type="password" class="form-control" name="password" placeholder="" required>
  				</div>
    		</div>
    		<div align="center">
  			<a href="recovery rahul.php"><button type="submit" class="btn btn-success" name="submitlogin">Submit</button></a>
   			</div>
   		</form>
	
	</div>
</body>
</html>
<?php
	if (isset($_POST['submitlogin'])){
		$password=$_POST['password'];
		$username=$_POST['username'];
		$query1="UPDATE `user_info` SET `password`='$password' WHERE `username`='$username'";
        $query_run = mysqli_query($con,$query1);
		
		if(mysqli_num_rows($query_run)>0){
		      header('location:login.php');
			}
		else{
			echo '<script type="text/javascript">alert("error occured.")</script>';
			}
		
		
	}
?>