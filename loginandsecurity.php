<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Libraria - HTML Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/overwrite.css">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/style.css" rel="stylesheet" />
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
    <br><br><br><br><br>


	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-5">

      <div class="row">
          <div class="col-xs-6 col-md-10">
            <div class="thumbnail">
              <div class="row">
                <div class="col-md-8"><b>Username: <?php


                 echo $_SESSION['username']; 


                 ?></b></div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                 <a href="editname.php"> <button>Edit</button></p></a>
                </div>
              </div>
              </div>
          </div>
      </div>
			<div class="row">
  				<div class="col-xs-6 col-md-10">
    				<div class="thumbnail">
      				<div class="row">
      					<div class="col-md-8"><b >E-mail: 
                <?php
                $qwer=$_SESSION['username'];
                $query="SELECT * FROM `user_info` WHERE username='$qwer'";   
                $query_run = mysqli_query($con,$query);
                   while($row = mysqli_fetch_array($query_run)){
                         $_SESSION['email']= $row['email'] ;
                  }
                   echo   $_SESSION['email'];
                    ?>
                    </b></div>
      					<div class="col-md-2"></div>
      					<div class="col-md-2">
      					<a href="editmail.php"><button>Edit</button></p></a> 
      					</div>
      				</div>
      				</div>
  				</div>
			</div>
			<div class="row">
  				<div class="col-xs-6 col-md-10">
    				<div class="thumbnail">
      				<div class="row">
      					<div class="col-md-8"><b>Mobile No: <?php
                               $qwer=$_SESSION['username'];
                $query="SELECT * FROM `user_info` WHERE username='$qwer'";   
                $query_run = mysqli_query($con,$query);
                   while($row = mysqli_fetch_array($query_run)){
                         $_SESSION['mobileno']= $row['mobile no'] ;
                  }

                               echo $_SESSION['mobileno']; 
                               ?></b></div>
      					<div class="col-md-2"></div>
      					<div class="col-md-2">
      					<a href="editmobile.php">	<button>Edit</button></p></a>
      					</div>
      				</div>
      				</div>
  				</div>
			</div>
			<div class="row">
  				<div class="col-xs-6 col-md-10">
    				<div class="thumbnail">
      				<div class="row">
      					<div class="col-md-8"><b>Password: <?php  echo $_SESSION['pasword']; ?></b></div>
      					<div class="col-md-2"></div>
      					<div class="col-md-2">
      						<a href="editpassword.php"><button>Edit</button></p></a>
      					</div>
      				</div>
      				</div>
  				</div>
			</div>


		</div>
	</div>
</body>
</html>

