<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/userdata.css">
</head>
<body>
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    Hey <?php
	                    echo   $_SESSION['usrname']
                        ?>     
                    <a class="navbar-brand" href="index.php">Libraria</a>
                </div>				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="temp4.php">Categories</a></li>
                        <li><a href="myrent.php">Rented books</a></li>  
                        <li><a href="mybookings.php">My Bookings</a></li>  
                        <li><a href="profile.php">My profile</a></li> 
                        <li><a href="wall.php">My wallet</a></li> 
                        <li><a href="thank.php">Log Out</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	

<?php 


  if (isset($_POST['submitlogin1'])) {
      $usename=$_POST['username'];
      $pasword=$_POST['password'];
      $pasword=hashword($pasword,$crypto);
      
      $query="select * from user_info WHERE username='$usename' AND password='$pasword' ";
      $query_run = mysqli_query($con,$query);
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

</body>
</html>