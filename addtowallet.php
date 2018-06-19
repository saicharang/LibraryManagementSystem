<?php
session_start();
require 'config.php';
?>
<?php
		
			$amt = $_SESSION['amount'];
			$_SESSION['cart'] = $amt;
			$usename=$_SESSION['username'];
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
				?>
			<?php }
			else{
				echo '<script type="text/javascript"> alert("Error") </script>';
			}
	
?>
w