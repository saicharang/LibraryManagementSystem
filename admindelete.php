<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin delete</title>
</head>
<body>

	<form method="post" action="admindelete.php">
		<b>enter the productid</b>
        <input type="number" name="productid" required=""><br>
        <input type="submit" name="submitdelete">
	</form>

<?php 
if (isset($_POST['submitdelete']))  {
 $productid=$_POST['productid'];
$query="DELETE FROM `bookdata` WHERE pid=$productid ";
$query_run = mysqli_query($con,$query);
if($query_run){
echo '<script type="text/javascript"> alert("Bookis removed from the database") </script>';
}
else{
echo '<script type="text/javascript"> alert("!Error") </script>';
}


}





 ?>
</body>
</html>