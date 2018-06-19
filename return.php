
<?php  
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                      echo   $_SESSION['username'];
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







<?php  
session_start();
require 'config.php';
  if(isset($_GET['id']) & !empty($_GET['id'])){
      $username=$_SESSION['username'];
      $qwerty= $_GET['id'];
    
  $query="SELECT * FROM rent WHERE id='$qwerty' ";
  $query_run = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($query_run)){
         $duedate= $row['duedate'] ;
      }
  if($query_run){
    $date_clicked = date('Y-m-d');
      $year = date('Y');
      $month = date('m');
      $date = date('d');
      $due=$duedate[0].$duedate[1];
      if(($due-$date)>0){ 
        $query="DELETE FROM `rent` WHERE id='$qwerty'";
        $query_run = mysqli_query($con,$query);
        if($query_run){
        ?><br><br><br><br><br><br><br><br><br>
      <p align="center" style=""><i><b>you have successfully returned the book </b></i></p>
      <?php 
      }
    }
      else if(($due-$date)<0){
        $cha=50;
        $sai=$date-$due;
        $detect=$cha*$sai;
          $query="DELETE FROM `rent` WHERE id='$qwerty'";
        $query_run = mysqli_query($con,$query);
        $query="SELECT  * FROM `user_info` WHERE username='$username'";
        $query_run = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($query_run)){
         $amount= $row['amount'] ;
         $returnamount= $row['returnamount'] ;
         }
         if($amount-$detect>=0){
          $query="DELETE FROM `rent` WHERE id='$qwerty'";
          $query_run = mysqli_query($con,$query);
          $amount=$amount-$detect;
          $query="UPDATE `user_info` SET amount='$amount' WHERE username='$username' ";
          $query_run = mysqli_query($con,$query);     ?><br><br><br><br><br><br><br><br><br><?php  
        echo "Fine amount is deducted from your wallet.." ;
          
         }
         else{
          $query="DELETE FROM `rent` WHERE id='$qwerty'";
          $query_run = mysqli_query($con,$query);
          $balanceamount=$detect-$amount;
          $sai=$returnamount+$balanceamount;
          $query="UPDATE `user_info` SET returnamount='$sai' WHERE username='$username' ";
          $query_run = mysqli_query($con,$query);     ?><br><br><br><br><br><br><br><br><br><?php  
        echo "Insufficient funds in wallet...Please pay fine amount ";
        echo $balanceamount;
        echo " soon!!!"?>
        <br><p>your total fine amount</p><?php 
        echo $sai;

         }
        ?><br><br><br><br><br><br><br><br><br><?php  
          
       }
      
      else{
         echo '<script type="text/javascript"> alert("Incredentials") </script>';

      }




  }





     
  }
 ?>