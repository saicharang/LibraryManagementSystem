<?php
session_start();
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>



	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


  
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
	
	<br><br><br>
	<h1 align="center">Add money</h1>
		<form method="POST" action="credit.php" align="center">
		<div class="up" align="center">
			<ul class="nav nav-tabs" style="margin-left: 456px; margin-right: 500px;" >
  				<li role="presentation" class="active"><a href="credit.php">Debit/Credit Card</a></li>
  				<li role="presentation"><a href="savedcards.php">Saved Cards</a></li>
			</ul><br>
			<b>Name on card:</b> <input type="text" name="name"><br><br>
			<b>Card Number:</b> <input type="number" name="number"><br><br>
			<b>Valid Thru:</b>     Month: <select name="month" id="month" required="">
			<option value="0">Select</option>
			<option value='1'>1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
			<option value='6'>6</option>
			<option value='7'>7</option>
			<option value='8'>8</option>
			<option value='9'>9</option>
			<option value='10'>10</option>
			<option value='11'>11</option>
			<option value='12'>12</option>
			</select>    Year: <select name="year" id="year" required="">
			<option value="0">Select</option>
			<option value='1970'>2018</option>
			<option value='1971'>2019</option>
			<option value='1972'>2020</option>
			<option value='1973'>2021</option>
			<option value='1974'>2022</option>
			<option value='1975'>2023</option>
			<option value='1976'>2024</option>
			<option value='1977'>2025</option>
			<option value='1978'>2026</option>
			<option value='1979'>2027</option>
			<option value='1980'>2028</option>
			<option value='1981'>2029</option>
			<option value='1982'>2030</option>
			<option value='1983'>2031</option>
			<option value='1984'>2032</option>
			<option value='1985'>2033</option>
			<option value='1986'>2034</option>
			<option value='1987'>2035</option>
			</select><br><br>
			<b>CVV:</b> <input type="number" name="cvv" min="100" max="999"><br><br>
			<b>Amount(Rs):</b> <input type="number" name="amount" min="0">
		</div>
		<br>
		<a href=""><button type="submit" name="submit" class="btn btn-success">Add to Wallet</button></a>
	</form>
</body>
</html>


<?php 
	if(isset($_POST['submit'])){
		$usename=$_SESSION['username'];
		$noc=$_POST['name'];
		$cn=$_POST['number'];
		$mth=$_POST['month'];
		$yr=$_POST['year'];
		$amt=$_POST['amount'];
		$query="SELECT * FROM `wallet` WHERE cardnumber='$cn'";
		$query_run=mysqli_query($con,$query);
		$que="select * from user_info WHERE username='$usename' ";
		$que_run=mysqli_query($con,$que);
		while($row = mysqli_fetch_array($que_run)){
            $sai= $row['amount'] ;
        } 
        $amt=$sai+$amt;
		if(mysqli_num_rows($query_run)>0){
         	$q="UPDATE `user_info` SET `amount`=$amt WHERE username='$usename'";
         	$q_run=mysqli_query($con,$q);
         	echo '<script type="text/javascript"> alert("money is added to your wallet") </script>';
		}
		else{
			$query="INSERT INTO `wallet`(`username`, `nameoncard`, `cardnumber`, `month`, `year`) VALUES ('$usename','$noc','$cn','$mth','$yr')";
			$query_run=mysqli_query($con,$query);
			$q="UPDATE `user_info` SET `amount`=$amt WHERE username='$usename'";
         	$q_run=mysqli_query($con,$q);
			if($query_run && $q_run){
				echo '<script type="text/javascript"> alert("money is added to your wallet") </script>';
			}
			else{
			   echo '<script type="text/javascript"> alert("Error") </script>';
			}
         

		}
	}
?>
