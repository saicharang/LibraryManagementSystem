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
						    </header><!--/header-->	<br><br><br><br><br>

<?php 

 $searchsai=$_REQUEST['searchsai'];

$sql= mysqli_query($con ,"select * from bookdata where productname='$searchsai'");
?>
<?php  

while($row = mysqli_fetch_array($sql)){
?>
	<div class="row">
         <br><br><br><br><br><br><br>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="<?php echo $row['imd_path']; ?>" alt="<?php echo $row['productname'] ?>">
          </div>
        </div>  
        <div class="col-sm-7">
          <div class="caption">
            <br><br><br><br><br>
            <b>Book name:</b><?php echo $row['productname'] ?><br><br >
            <?php echo $row['description'] ?><br><br>
            <b>Author:</b> <?php echo $row['Author name'] ?><br><br>
            <b>Price:</b>Rs <?php echo $row['unitprice'] ?><br>
            <a href="booking.php?id=<?php echo $row['pid']; ?>" class="btn btn-primary" role="button">Buy</a>
            <a href="rent.php?id=<?php echo $row['pid']; ?>" class="btn btn-primary"  role="button">Rent</a>
          </div>    
        </div>
      </div>
<?php
}

?>



</body>
</html>
