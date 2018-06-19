<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
    </header><!--/header-->	<br><br><br><br><br><br><br><br><br><br>
    <div align="center">
    <b>Your Wallet Ballance</b><br>
    <?php 
    $cha=$_SESSION['username'];
        $query="SELECT  * FROM `user_info` WHERE username='$cha' "; 
        $query_run = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($query_run)){
            $amount=$row['amount'] ;
            $wallet=$row['amount'] ;
            $returnamount=$row['returnamount'] ;
            }
        echo "$wallet";
    ?> <br>
    <b>Your Fine amount</b><br><?php 
    echo "$returnamount";
    if($returnamount>0 && $amount>=$returnamount){
    $returnamount=0;
    //echo $wallet;
    //$qwerty = $wallet - $returnamount;
    //echo $qwerty;
    $qwerty=0;
    $query="UPDATE `user_info` SET `returnamount`='$returnamount' WHERE username='$cha' ";
    $query_run = mysqli_query($con,$query);
    $query="UPDATE `user_info` SET `amount`='$qwerty' WHERE username='$cha' ";
    $query_run = mysqli_query($con,$query);
    
    }
   else if($returnamount>0 && $amount>0){
    $returnamount=$returnamount-$amount;
    $amount=0;
     $query="UPDATE `user_info` SET `returnamount`='$returnamount' WHERE username='$cha' ";
    $query_run = mysqli_query($con,$query);
    $query="UPDATE `user_info` SET `amount`='$amount' WHERE username='$cha' ";
    $query_run = mysqli_query($con,$query);
   }




   ?>
</div>
</body>
</html>