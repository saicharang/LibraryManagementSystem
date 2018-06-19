

<?php
	session_start();
	require 'config.php';
	if(isset($_GET['id']) & !empty($_GET['id'])){
		    $username=$_SESSION['username'];
			$qwerty= $_GET['id'];
			 $query="select * from user_info WHERE username='$username' ";
      		$query_run = mysqli_query($con,$query);
      		while($row = mysqli_fetch_array($query_run)){
         		$detectamount= $row['amount'] ;	
              }
            $query="select * from bookdata WHERE pid='$qwerty' ";
      		$query_run = mysqli_query($con,$query);
      		while($row = mysqli_fetch_array($query_run)){
         		$unitprice= $row['unitprice'] ;	
              }

             if($detectamount<$unitprice){
             	header('location:redirect1.php');
             }
             else{
             	$process=$detectamount-$unitprice;
              	$q="UPDATE `user_info` SET `amount`='$process' WHERE username='$username'";
             	$q_run=mysqli_query($con,$q);

				$query="INSERT INTO `bookings`(`productid`, `username`) VALUES ('$qwerty','$username')";
				$query_run = mysqli_query($con,$query);
				if($query_run && $q_run){
					 header('location:redirect.php');
				}	
             }
             		
	}else{
		header('location: cart1.php?status=failed');
	}

?>
