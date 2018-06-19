<?php
session_start();
require 'config.php';
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
	                    echo   $_SESSION['usrname'];
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
$sql= mysqli_query($con ,"select * from bookdata where cno=2");
while($row = mysqli_fetch_array($sql)){
?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
        <br><br><br><br><br>
      <img src="<?php echo $row['imd_path']; ?>" alt="<?php echo $row['productname'] ?>" style="width:150px">
      <div class="caption">

        <b>Book name:</b><?php echo $row['productname'] ?><br><br>
        <?php 
            $string=$row['description'];
            $string = strip_tags($string);
            if (strlen($string) > 50) {
    // truncate string
            $stringCut = substr($string, 0, 50);
            $endPoint = strrpos($stringCut, ' ');
    //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
            $string .= '....'?> ;
            <?php 
            }
        echo $string;
                         ?>
                         <a href="fulldesc.php?id=<?php echo $row['pid']; ?>">read more</a><br><br>
        <b>Price:</b>Rs <?php echo $row['unitprice'] ?><br>

      <p><a href="fulldesc.php?id=<?php echo $row['pid']; ?>" class="btn btn-primary" role="button">Read more</a></p>    
      </div>
    </div>
  </div>
<?php
}

?>
