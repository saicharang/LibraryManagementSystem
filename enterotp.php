<?php 
  require 'config.php';
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>

<body>
<div class="height1">
</div>
<div class="height">
    <form method="post" action="enterotp.php">
    	<div align="center">
    		<label for="exampleInputEmail1">Please enter your otp</label><br>
    		<div class="form-group">
    		<input type="text" class="form-control" name="recoveryotp" placeholder="otp" required>
  			</div>
    	</div>
    	<div align="center">
  		<button type="submit" class="btn btn-success" name="submit">Submit</button>
   		</div>
   	</form>

<?php
if (isset($_POST['submit'])) {
  $otpentered=$_POST['recoveryotp'];
  $otpnum=$_SESSION['otpnumber'];
  $usernme=$_SESSION['usrname'];
  $sai="SELECT * FROM `otp` WHERE usernames='$usernme' AND otprecovery='$otpnum'";
  $query_run=mysqli_query($con,$sai);
  if($query_run){
    header('location:index.php');

  }
 } 
 ?>
</div>
</body>
</html>



