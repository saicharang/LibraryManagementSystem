
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
      <form method="post" action="saitry.php">
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
        <a href="saitry.php"><button type="submit" class="btn btn-success" name="submitlogin">Submit</button></a>
        </div>
      </form>
  
  </div>
</body>
</html>
<?php
if(isset($_POST['submitlogin']))
{
    $email=$_POST['email'];
    $username=$_POST['username'];
    $query="SELECT * FROM `user_info` WHERE `email`='$email' and `username`='$username'";
    $query_run=mysqli_query($con,$query);
  
    if(mysqli_num_rows($query_run)==1){
   
    require_once('phpmail/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "rahuldommaraju@gmail.com";
    // GMAIL password
    $mail->Password = "9440074522";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='rahuldommaraju@gmail.com';
    $mail->FromName='your_name';
    $mail->AddAddress('$email', '');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }
}	

?>