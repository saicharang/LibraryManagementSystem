<?php
session_start();
require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>
<body background="img/wallpaper.wiki-Book-Lies-Sofa-Library-Background-PIC-WPD001971.jpg" height="1080px" width="1920px"  >		
	<br><br><br><h1 style="background-color:  lightyellow" align="middle">Welcome to Libraria</h1>
<div class="height1">
</div>
<div class="margin">

	<ul class="nav nav-tabs">
	<li role="presentation" class="active padding1"><a href="login.php">Login</a></li>
	<li role="presentation"><a href="signup.php">Sign Up</a></li>
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
  		<a href="homepage1.php"><button type="submit" class="btn btn-success" name="submitlogin">Login</button></a>
  	    </div>
		<div align="right">
			<a href="recovery.html">Forgot password?</a>
			
		</div>
	</form>



<?php 

 $crypto=md5('India');

  function hashword($string,$crypto){
     $string = crypt($string,'$1$'. $crypto . '$');
     return $string;
  }

  if (isset($_POST['submitlogin'])) {
      $usename=$_POST['username'];
      $pasword=$_POST['password'];
      $_SESSION['username']=$_POST['username'];
      $_SESSION['pasword']=$pasword;  

      $pasword=hashword($pasword,$crypto);
      
      $query="select * from user_info WHERE username='$usename' AND password='$pasword' ";
      $query_run = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($query_run)){
         $_SESSION['email']= $row['email'] ;
         $_SESSION['mobileno']=$row['mobile no'];
         $_SESSION['address']= $row['Address'] ;
         $_SESSION['city']= $row['City'] ;
         $_SESSION['state']= $row['State'];
         $_SESSION['country'] = $row['Country'];
      }
     if (mysqli_num_rows($query_run)>0) {   
        $_SESSION['usrname']=$usename;
         	header('location:index.php');
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




