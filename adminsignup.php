<?php
require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>
<body background="img/wallpaper.wiki-Book-Lies-Sofa-Library-Background-PIC-WPD001971.jpg" height="1080px" width="1920px" >   
  


<div class="height1">
	
</div>
<div class="margin border">
	<ul class="nav nav-tabs">
	<li role="presentation" class="padding1"><a href="adminlogin.php">Admin Login</a></li>
	<li role="presentation" class="active"><a href="adminsignup.php">Admin SignUp</a></li>
	</ul>
	<form method="post">
	<br>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Username</label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username" required>
  		</div>
      
  		<div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  		</div>
       
  		<div align="center">
  		<a href="adminsignup.php"><button type="submit" class="btn btn-success" name="submitsignup">Register</button></a>
		</div>
	</form>

	<?php

  $crypto=md5('India');

  function hashword($string,$crypto){
     $string = crypt($string,'$1$'. $crypto . '$');
     return $string;
  }
if (isset($_POST['submitsignup'])) { 
    $adminusename=$_POST['username'];
    $adminpasword=$_POST['password'];
   



    $error3="";
    $error1="";
    $error2="";
        if( !preg_match("#[a-z]+#", $adminpasword) ) {
             $error3= "Password must include at least one letter!";
        }
         

         if( strlen($adminpasword)<4 ) {
             $error1= "Password too short!";
        }
    
         if( strlen($adminpasword)>15   ) {
            $error2= "Password too long!";
        }
         if( $error3 || $error1 || $error2){
          echo '<script type="text/javascript"> alert("Password validation failure : password should be more than 4 and less than 8 characters and atleast 1 letter") </script>';
        }
 
        else {          
           $pasword=hashword($adminpasword,$crypto);
           $query="select * from admininfo WHERE username='$adminusename'";
           $query_run = mysqli_query($con,$query);
            if (mysqli_num_rows($query_run)>0) {
                  echo '<script type="text/javascript"> alert("username already exists try another username") </script>';
                  }
            else{

                 $query = "INSERT INTO `admininfo`(`username`, `password`) VALUES ('$adminusename','$adminpasword')";
                 $query_run = mysqli_query($con,$query);
                 
                 if ($query_run) {
                   echo '<script type="text/javascript"> alert("user registered.. go to login page") </script>';
                   
                   }
                 else{
                        echo '<script type="text/javascript"> alert("!Error") </script>';



                  }
            }

      }


  
}       
?>






</div>

</body>
</html>