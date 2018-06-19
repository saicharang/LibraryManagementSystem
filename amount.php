<?php
if($returnamount>0 && $amount>=$returnamount){
	$returnamount=0;
	$amount=$amount-$returnamount;
	$query="update user_info where";

}
else if($returnamount>0 && $amount>0){
	$returnamount=$returnamount-$amout;
	$amount=0;
	$query="update user_info where";
}

if(isset($_POST['$searchsai'])){

}
$_SESSION[]=
$count=0;
$count+=1;
if($count>3){
	header(location:"otp.php");
}




  ?>