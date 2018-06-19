<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	

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
	                    echo   $_SESSION['usrname'];
                        ?>     
                    <a class="navbar-brand" href="index.html">Libraria</a>
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
	<style type="text/css">
		.up{
			margin-top: 100px;
		}
		.left: {
			margin-left: 500px;
		}
		.right{
			margin-right: 100px; 
		}
	</style>
</head>
<body>
	
	
	<br><br><br>
	<h1 align="center">Payment Page</h1>
		<form method="get" action="" align="center">
		<div class="up" align="center">
			<ul class="nav nav-tabs" style="margin-left: 456px; margin-right: 500px;" >
  				<li role="presentation" class="active"><a href="#">Debit/Credit Card</a></li>
  				<li role="presentation" class=""><a href="#">Cash On Delivery</a></li>
  				<li role="presentation" class=""><a href="#">Net Banking</a></li>
			</ul><br>
			<b>Name on card:</b> <input type="text" name="name"><br><br>
			<b>Card Number:</b> <input type="text" name="number"><br><br>
			<b>Valid Thru:</b> <input type="month" name="date"><br><br>
			<b>CVV:</b> <input type="number" name="cvv" min="100" max="999">
		</div>
		<br>
		<button type="button" class="btn btn-success">Pay</button>
	</form>
</body>
</html>
