<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login14.css">
</head>
<body background="img/wallpaper.wiki-Book-Lies-Sofa-Library-Background-PIC-WPD001971.jpg" height="1080px" width="1920px" >   

  <br><br><br><h1 style="background-color: lightyellow" align="middle">Welcome to Libraria</h1>
<div class="height1">
</div>
<div class="margin border">
	<ul class="nav nav-tabs">
	<li role="presentation" class="padding1"><a href="login.php">Login</a></li>
	<li role="presentation" class="active"><a href="signup.php">Sign Up</a></li>
	</ul>
	<form method="post" action="signup.php">
	<br>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Username</label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="username" required>
  		</div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="password" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="Email" class="form-control" name="Email" placeholder=""  required>
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Mobile no</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="" name="mobileno" required>
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="address" required>
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">City</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="city" required>
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">State</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="state" required>
      </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Country</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="country" required>
      </div>
  		<div align="center">
  		<a href="signup.php"><button type="submit" class="btn btn-success" name="submitsignup">Register</button></a>
		</div>
	</form>

	<?php
  $crypto=md5('India');
  function hashword($string,$crypto){
     $string = crypt($string,'$1$'. $crypto . '$');
     return $string;
  }
if (isset($_POST['submitsignup'])) { 
    $usename=$_POST['username'];
    $pasword=$_POST['password'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['Email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $error3="";
    $error1="";
    $error2="";
    $error4="";
        if (!preg_match("/^[a-zA-Z0-9]*$/",$usename)) {
             $nameErr = "Only letters,digits and white space allowed"; 
         }
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format"; 
         }
        if( !preg_match("#[a-z]+#", $pasword) ) {
             $error4= "Password must include at least one lower case letter!";
        }
        if( !preg_match("#[A-Z]+#", $pasword) ) {
             $error3= "Password must include at least one Upper case letter!";
        }
        if( strlen($pasword)<4 ) {
             $error1= "Password too short!";
        }
    
        if( strlen($pasword)>15   ) {
            $error2= "Password too long!";
        }
         if( $error3 || $error1 || $error2 || $error4){
          echo '<script type="text/javascript"> alert("Password validation failure : password should be more than 4 and less than 15 characters and atleast 1 letter") </script>';
        }
        else{
          if( $nameErr){
          echo '<script type="text/javascript"> alert("Username validation failure : Only letters and white space allowed ") </script>';
        }
        else{
           if( $emailErr){
          echo '<script type="text/javascript"> alert("Email validation failure : Invalid email format ") </script>';
           }
        else {          
           $pasword=hashword($pasword,$crypto);
           $query="select * from user_info WHERE username='$usename'";
           $query_run = mysqli_query($con,$query);
            if (mysqli_num_rows($query_run)>0) {
                  echo '<script type="text/javascript"> alert("username already exists try another username") </script>';
                  }
            else{

                 $query = "INSERT INTO `user_info`(`username`, `password`, `email`, `mobile no`, `Address`, `City`, `State`, `Country`) VALUES ('$usename','$pasword','$email',    '$mobileno','$address','$city','$state','$country')";
                 $query_run = mysqli_query($con,$query);
                 
                 if ($query_run) {
                   echo '<script type="text/javascript"> alert("user registered.. go to login page") </script>';
                   
                   }
                 else{
                        echo '<script type="text/javascript"> alert("!Error") </script>';
                  }
            }
      }

     }

    }
}       
?>
</div>
</body>
</html>