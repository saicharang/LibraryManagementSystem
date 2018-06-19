<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
	<form action="admininsert.php" method="Post" enctype="multipart/form-data">
   <br>
    <b>Name:</b>  <input type="text" name="name" required="" ><br><br>
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
	<b>Price</b> <input type="number" name="price" required=""><br><br>
	<b>Author name:</b> <input type="text" name="aname" required=""><br><br>
	<b>Description:</b> <br><br>
	<textarea name="desc" rows="8" cols="80"></textarea><br><br>
		<input type="file" name="filetoupload" id="file" required=""><br><br>
     <input type="submit" name="submitaz">
	</form>
<?php 

if(isset($_POST['submitaz']))
{
  $name=$_POST['name'];
 
  $category=$_POST['category'];
  $price=$_POST['price'];
  $aname=$_POST['aname'];
  $desc=$_POST['desc'];
include "config.php";
$filename = $_FILES['filetoupload']['name'];
$filetmp = $_FILES['filetoupload']['tmp_name'];
$filesize = $_FILES['filetoupload']['size'];
$file_basename =basename($_FILES['filetoupload']['name']);
$dir = "upload/";
$final_dir=$dir.$file_basename;
move_uploaded_file($filetmp,$final_dir);
 
$query = "INSERT INTO `bookdata`(`productname`, `cno`, `unitprice`, `imd_name`, `imd_path`, `description`, `Author name`) VALUES ('$name','$category','$price','$file_basename','$final_dir','$desc','$aname')";

$query_run = mysqli_query($con,$query);
if($query_run)
{
   echo '<script type="text/javascript"> alert("product is added.......success") </script>';
}
else
 echo '<script type="text/javascript"> alert("!Error") </script>';

}



 ?>
</body>
</html>