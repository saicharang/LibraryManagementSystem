<?php
session_start();
require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>
<body background="img/wallpaper.wiki-Book-Lies-Sofa-Library-Background-PIC-WPD001971.jpg" height="1080px" width="1920px"  >		
	
<div class="height1">
</div>
<div class="margin">
	<ul class="nav nav-tabs">
	<li role="presentation" class="active padding1"><a href="adminlogin.php">Admin Login</a></li>
	<li role="presentation"><a href="adminsignup.php">Admin SignUp</a></li>
	</ul>
	<form method="post" action="">
	<br>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Username</label>
    		<input type="text" class="form-control" name="username" placeholder="" required>
  		</div>
        
  		<div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" name="password" placeholder="" required> 
  		</div>
  		
  		<div align="center">
  		<a href="adminhomepage.php"><button type="submit" class="btn btn-success" name="submitlogin">Login</button></a>
  	    </div>
		<div align="right">
			<a href="recovery.php">Forgot password?</a>
			
		</div>
	</form>



<?php 


 $crypto=md5('India');

  function hashword($string,$crypto){
     $string = crypt($string,'$1$'. $crypto . '$');
     return $string;
  }

  if (isset($_POST['submitlogin'])) {
      $adminusename=$_POST['username'];
      $adminpasword=$_POST['password'];
      $_SESSION['username']=$_POST['username'];
      $_SESSION['pasword']=$adminpasword;  

      
      
      $query="select * from admininfo WHERE username='$adminusename' AND password='$adminpasword' ";
      $query_run = mysqli_query($con,$query);
     if (mysqli_num_rows($query_run)>0) {   
        $_SESSION['usrname']=$usename;
         	header('location:adminhomepage.php');
     }
     else
     {
         echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
     }
  	
   }


 ?>

</div>

</body>
</html>




