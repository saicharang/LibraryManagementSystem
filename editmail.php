<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit E-mail</title>
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
    <div class="row height">
    	
    </div>
    <div class="row">
		<div class="col-md-4">
			
		</div>
    <form method="POST" action="editmail.php">
		<div class="col-md-5">
			<h2>Change E-mail</h2>
			<div class="row">
  				<div class="col-xs-6 col-md-10">
    				<div class="thumbnail">
      				<div class="row">
      					<div class="col-md-12 font">
      						Use the form below to change the e-mail address for your Libraria account. Use the new address next time you log in or place an order.
      					</div>
      				</div>
      				<br><br>
      				<div class="row">
      					<div class="col-md-3"><b>New e-mail:</b></div>
      				</div>
      				<div class="row">
      					<div class="col-md-5">
      						<input type="e-mail" class="form-control" id="exampleInputEmail1" placeholder="email" name="newemail" required>
      					</div>
      				</div>
              <br>
              
      			</div>
            <p align="center"><button type="submit" name="submitsavechanges">Save Changes</button></p>
  				</div>
          
			</div>
		</div>
	</div>
  </form>
  <?php
  if(isset($_POST['submitsavechanges'])){
    $newemail=$_POST['newemail'];
    $sai=$_SESSION['email'];
    $query="update user_info set email='$newemail' where email='$sai'";
     $query_run = mysqli_query($con,$query);
     if ($query_run) {   
         echo '<script type="text/javascript"> alert("Your email is changed") </script>';
     }
     else{
         echo '<script type="text/javascript"> alert("Sorry please try again") </script>';
      }
  }
  ?>




</body>
</html>