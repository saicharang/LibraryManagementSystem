<?php
    require 'config.php';
    session_start();
	// Authorisation details.
    if(isset($_POST['submitlogin'])){
    $mobile=$_POST['mobileno'];
    $recoveryusername6=$_POST['usernamerecovery'];
	$username = "gondralasaicharan@gmail.com";
	$hash = "0311784f475ce1c92e1d4c51f2a794d3091e97806111ef562e4afa20205bca15";
	$otp=rand(1111,9999);
	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	// A single number or a comma-seperated list of numbers
	$message = "Your OTP is".$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$mobile."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	if($result==true){
		$query="SELECT * FROM `user_info` WHERE username='$recoveryusername6'";
		$query_run=mysqli_query($con,$query);
		if ($query_run>0) {


			 while($row = mysqli_fetch_array($query_run)){
         $_SESSION['email']= $row['email'] ;
         $_SESSION['mobileno']=$row['mobile no'];
         $_SESSION['address']= $row['Address'] ;
         $_SESSION['city']= $row['City'] ;
         $_SESSION['state']= $row['State'];
         $_SESSION['country'] = $row['Country'];
         $_SESSION['usrname'] = $row['username'];
         $_SESSION['username'] = $row['username'];
      }

			$_SESSION['otpnumber']=$otp;
		    $_SESSION['usrname']=$recoveryusername6;
			$query="INSERT INTO `otp`(`usernames`, `otprecovery`) VALUES ('$recoveryusername6','$otp')";
			$query_run=mysqli_query($con,$query);
			if ($query_run) {
               header('location:enterotp.php');     
             }
            else{
              echo '<script type="text/javascript"> alert("!Database Error") </script>';
            }
		}
	
	}
	else{
		echo "OTP not sent";
	}
	curl_close($ch);
}
?>