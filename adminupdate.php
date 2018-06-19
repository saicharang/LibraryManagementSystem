<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin update</title>
</head>
<body>
<form method="post" action="adminupdate.php">
	<b>enter the productid</b>
	<input type="number" name="productid"><br><br>
   <b>Category:</b>  <select name="category" required="">
    <option>-----ALL-----</option>
    <option value="1">Action</option>
    <option value="2">Romance</option>
    <option value="3">Crime & Thriller</option>
    <option value="4">Biographies & Memories</option>
    <option value="5">Business & Economics</option>
    <option value="6">Study aids & Exam prep</option>
    <option value="7">Literature</option>
    <option value="8">Sci-fi & Fantasy</option>
    <option value="9">Textbooks</option>

  </select><br><br>

   <b>New Name:</b>  <input type="text" name="name1" ><br><br>
	
	<b>New Price</b> <input type="number" name="price" required=""><br><br>
	
	
	<br><br>
	  <textarea name="specs" rows="8" cols="80"></textarea><br><br>
	<input type="submit" name="submitupdate">

</form>
<?php
if(isset($_POST['submitupdate']))
{
	$productid=$_POST['productid'];
  $name1=$_POST['name1'];
  $category=$_POST['category'];
  
  $price=$_POST['price'];
 
  $specs=$_POST['specs'];
 $productid=$_POST['productid'];

     

      $query="UPDATE `bookdata` SET `productname`='$name1',`cno`='$category',`unitprice`='$price',`description`='$specs' WHERE pid=$productid";
     $query_run = mysqli_query($con,$query);
     if($query_run){

      echo '<script type="text/javascript"> alert("book is updated") </script>';

     }
  else{
      
      echo '<script type="text/javascript"> alert("!Error") </script>';
     
  }
  
}

  ?>
</body>
</html>