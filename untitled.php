<?php 
if(isset($_POST['submit'])){
		$usename=$_SESSION['username'];
		$amt=$_POST['amount'];
		$que="select * from user_info WHERE username='$usename' ";
		$que_run=mysqli_query($con,$que);
		while($row = mysqli_fetch_array($que_run)){
            $sai= $row['amount'] ;
        } 
        $amt=$sai+$amt;
		$q="UPDATE `user_info` SET `amount`='$amt' WHERE username='$usename'";
        $q_run=mysqli_query($con,$q);
		if($q_run){
			echo '<script type="text/javascript"> alert("money is added to your wallet") </script>';
		}
		else{
			echo '<script type="text/javascript"> alert("Error") </script>';
		}
	}
?>

<a href="profile.php"><button type="submit" name="submit" class="btn btn-success">Add to Wallet</button></a>