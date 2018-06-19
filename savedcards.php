<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saved Cards</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


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
	 <style type="text/css">
  body{
    background-image: url("New folder/line_glare_light_color_background_47046_1920x1080.jpg");
  }
</style>
	<br><br><br>
	<h1 align="center">Payment Page</h1>
		<form method="post" action="savedcards.php" align="center">
		<div class="up" align="center">
			<ul class="nav nav-tabs" style="margin-left: 456px; margin-right: 500px;" >
  				<li role="presentation" class=""><a href="credit.php">Debit/Credit Card</a></li>
  				<li role="presentation" class="active"><a href="savedcards.php">Saved Cards</a></li>
			</ul><br>
			<?php 
				$usename=$_SESSION['username'];
				$query="select * from wallet where username='$usename'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0){
					while($row = mysqli_fetch_array($query_run)){
					?>
					<form action="savedcards.php" method="post">
	   				<div class="thumbnail">
	      				<div class="caption">
	      					<p><h3>Card Number:</h3> <?php echo $row['cardnumber'] ?></p>
	      					<p>CVV:<input type="number" name="" placeholder="CVV" min="100" max="999"></p>
	        				<b>Amount:</b>Rs <input type="number" name="amount"><br>
	        				<?php
	        				    if (isset($_POST['addwallet'])) {
	        				    	$_SESSION['amount']=$_POST['amount'];
	        				    	header('location:addtowallet.php');
	        				    }
	        				?>
	        				<button class="btn btn-primary" type="submit" name="addwallet">Add to Wallet</button>
	      				</div>
	    			</div>
	    			</form>
					<?php
					} ?>
				<?php
				}
			?>
		</div>
		<br>
	</form>
</body>
</html>
