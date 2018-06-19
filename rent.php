
<?php
	session_start();
	require 'config.php';
	if(isset($_GET['id']) & !empty($_GET['id'])){
		    $username=$_SESSION['username'];
			$qwerty= $_GET['id'];
			$date_clicked = date('Y-m-d');
			$year = date('Y');
			$month = date('m');
			$date = date('d');
			$due=$date+15;
			if($due>31){
				$month=$month+1;
			}
			if($month>12){
				$year=$year+1;
			}
			$duedate=$due.$month.$year;
            //echo "Time the button was clicked: " . $date_clicked[0] . "<br>";
            //echo "Time the button was clicked: " . $duedate	 . "<br>";
            $qaz=$_SESSION['username'];
            $query="INSERT INTO `rent`(`productid`, `duedate`, `username`) VALUES ('$qwerty','$duedate','$qaz')";

            $query_run = mysqli_query($con,$query);
            if($query_run){?>

                  <!DOCTYPE html>
                 <html lang="en">
						  <head>
						    <meta charset="utf-8">
						    <meta http-equiv="X-UA-Compatible" content="IE=edge">
						    <meta name="viewport" content="width=device-width, initial-scale=1">
						    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
						    <title>Libraria - HTML Bootstrap Template</title>

						    <!-- Bootstrap -->
						    <link href="css/bootstrap.min.css" rel="stylesheet">
							<link rel="stylesheet" href="css/font-awesome.min.css">
							<link rel="stylesheet" href="css/animate.css">
							<link rel="stylesheet" href="css/overwrite.css">
							<link href="css/animate.min.css" rel="stylesheet"> 
							<link href="css/style.css" rel="stylesheet" />	
						    
						  </head>
						  <body>	
							<header id="header">
						        <nav class="navbar navbar-fixed-top" role="banner">
						            <div class="container">
						                <div class="navbar-header">
						                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						                        <span class="sr-only">Toggle navigation</span>
						                        <span class="icon-bar"></span>
						                        <span class="icon-bar"></span>
						                        <span class="icon-bar"></span>
						                    </button>
						                    Hey <?php
							                    echo   $_SESSION['usrname'];
						                        ?>     
						                    <a class="navbar-brand" href="index.php">Libraria</a>
						                </div>				
						                <div class="collapse navbar-collapse navbar-right">
						                    <ul class="nav navbar-nav">
						                        <li class="active"><a href="index.php">Home</a></li>
						                        <li><a href="temp4.php">Categories</a></li>
						                        <li><a href="myrent.php">Rented books</a></li>  
						                        <li><a href="mybookings.php">My Bookings</a></li>  
						                        <li><a href="profile.php">My profile</a></li> 
						                        <li><a href="wall.php">My wallet</a></li> 
						                        <li><a href="thank.php">Log Out</a></li>
						                    </ul>
						                </div>
						            </div><!--/.container-->
						        </nav><!--/nav-->		
						    </header><!--/header-->	<br><br><br><br><br><br><br><br><br><br>


           		         <div>
           	      			<p align="center">You have successfully rented the book.....</p>
           	   				 <p align="center"><b>your due date is </b><?php    
                   				echo   $duedate[0].$duedate[1].'/'.$duedate[2].$duedate[3].'/'.$duedate[4].$duedate[5].$duedate[6].$duedate[7] ;
                   					?>
                   					<br><br><p align="center">Please return the book before 'due date' or you will be charged with fine!!</p>
                   					<br><br>
                   					<p align="center">NOTE: fine = 50 INR per day</p>

           	    			 </p>
           				</div>





            	<?php
            	

            }
            else{
            	 echo '<script type="text/javascript"> alert("problem") </script>';

            }


			 
             		
	}else{
		header('location: cart1.php?status=failed');
	}

?>
