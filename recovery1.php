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
    	<form method="post" action="recovery1.php">
    		<div align="center">
    			<label for="exampleInputEmail1">Username</label><br>
    			<div class="form-group">
    			<input type="text" class="form-control" name="username" placeholder="" required>
  				</div>
    		</div>
    		<div align="center">
    			<label for="exampleInputEmail1">Please enter your email id</label><br>
    			<div class="form-group">
    			<input type="email" class="form-control" name="email" placeholder="" required>
  				</div>
    		</div>
    		<div align="center">
  			<a href="recovery1.php"><button type="submit" class="btn btn-success" name="submitlogin">Submit</button></a>
   			</div>
   		</form>
	
	</div>
</body>
</html>
<?php



 $crypto=md5('India');

  function hashword($string,$crypto){
     $string = crypt($string,'$1$'. $crypto . '$');
     return $string;
  } 
	if (isset($_POST['submitlogin'])){
		$email=$_POST['email'];
		$username=$_POST['username'];
		$query="SELECT * FROM `user_info` WHERE `email`='$email' and `username`='$username'";
		$query_run=mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)==1){
			$password=rand(10000,99999);
			$password_hash=hashword($password,$crypto);
			$query1="UPDATE `user_info` SET `password`='$password_hash' WHERE `email`='$email' and `username`='$username'";
			$result1=mysqli_query($con,$query1);
			$to=$email;
			$headers="From:rahuldommaraju@gmail.com";
			$subject="Your Recovered Password";
			$message="Please use this password to login".$password;
			$sent=mail($to,$subject,$message,$headers);
			if($sent){
				header('location:login.php');
			}
			else{
				echo '<script type="text/javascript">alert("error occured.E-mail does not exist.")</script>';
			}
		}
		else{
			echo '<script type="text/javascript">alert("Please signup")</script>';
		}
	}
?>