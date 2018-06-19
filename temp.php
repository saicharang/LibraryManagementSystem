<?php
require 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>
<body>
	<div class="height1">
	</div>
	<div class="height">
    	<form method="post" action="temp.php">
    		<div align="center">
    			<label for="exampleInputEmail1">Username</label><br>
    			<div class="form-group">
    			<input type="text" class="form-control" name="username" placeholder="" required>
  				</div>
    		</div>
    		<div align="center">
    			<label for="exampleInputEmail1">Please enter your email id</label><br>
    			<div class="form-group">
    			<input type="email" class="form-control" name="email" placeholder="" required>
  				</div>
    		</div>
    		<div align="center">
  			<a href="temp.php"><button type="submit" class="btn btn-success" name="submitlogin">Submit</button></a>
   			</div>
   		</form>
	
	</div>
</body>
</html>

<?php

         $crypto=md5('India');

         function hashword($string,$crypto){
         $string = crypt($string,'$1$'. $crypto . '$');
         return $string;}
         $token="";

         ini_set("SMTP", "localhost");

  if (isset($_POST['submitlogin'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $q="SELECT * FROM `user_info` WHERE `email`='$email' and `username`='$username'";
        $r = mysqli_query($con,$q);
        if (mysqli_num_rows($r)>0){
        $token=rand(10000,99999);
        
        //$token=hashword($pasword,$crypto);
        $q="INSERT INTO `user_info`( `token`) VALUES ('$token')";
        $r = mysqli_query($con,$q);
         
	   

   
       $subject = "Forgot Password on Library.net";
       $uri = 'http://'. $_SERVER['HTTP_HOST'] ;
       $message = '
       <html>
       <head>
       <title>Forgot Password For Megarush.net</title>
</head>
<body>
<p>Click on the given link to reset your password <a href="'.$uri.'/reset.php?token='.$token.'">Reset Password</a></p>

</body>
</html>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: <rahuldommaraju@gmail.com>' . "\r\n";
$headers .= 'Cc: mnvajay@gmail.com' . "\r\n";
    if(@mail($email,$subject,$message,$headers)){
	    echo '<script type="text/javascript"> alert("password sent to email id") </script>';
       } 

     else{
     	echo '<script type="text/javascript"> alert("password not sent to email id") </script>';
     }      


	
}

}
