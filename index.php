<?php
session_start();
require 'config.php';
?>

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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                        ?>     <br>
                <div class="collapse navbar-collapse navbar-right">
                	<div class="row">
                		<a class="navbar-brand" href="index.php">Libraria</a>
                	</div>
                	<div class="row">

                		<div class="col-md-12">
							<ul class="nav navbar-nav">
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href="temp4.php"></a></li>
								<li><a href="temp4.php"></a></li>
								<li><a href="temp4.php"></a></li>

                    		    <li class="active"><a href="index.php">Home</a></li>
                        		<li><a href="temp4.php">Categories</a></li>
                        		<li><a href="myrent.php">Rented books</a></li>  
                        		<li><a href="mybookings.php">My Bookings</a></li>  
                        		<li><a href="profile.php">My profile</a></li> 
                        		<li><a href="sq.php">Search</a></li> 
                        		<li><a href="wall.php">My wallet</a></li> 
                        		<li><a href="thank.php">Log Out</a></li> 
                    		</ul>
                    		                			
                		</div>

                		 
                	</div>



                </div>
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active" align="center">						
						<img src="img/4056-Ernest-Hemingway-Quote-There-is-no-friend-as-loyal-as-a-book.jpg" class="img-responsive" alt="" width="1000px"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span></span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p></p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item" align="center">
						<img src="img/ravi_book.png" class="img-responsive" alt="" width="1000px"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
								<p></p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								<form class="form-inline">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item" align="center">
						<img src="img/8e47707bf6830d9c7ee27b391a3443d7.jpg" class="img-responsive" alt="" width="1000px"> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
								<p></p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<form class="form-inline">
									<div class="form-group">
										
									</div>
									<div class="form-group">
										
									</div>
								</form>
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	
	
	
	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Categories</h3>
				
			</div>
			<div class="row">
				<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center"><a href="img/cat/Literature-and-Fiction.png" class="flipLightBox">
						<a href="actionbook.php"><img src="img/cat/Literature-and-Fiction.png" class="img-responsive" alt=""></a>
						</a>
						<br>
						<a href="actionbook.php"><label>Action</label></a></p>						
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center">
						<a href="img/cat/Romance.png" class="flipLightBox">
						<a href="romancebook.php"><img src="img/cat/Romance.png" class="img-responsive" alt=""></a>
						</a>
						<br>
						<a href="romancebook.php"><label>Romance</label></p></a>
					</div>
				</figure>	
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center">
						<a href="img/cat/CrimeThriller.png" class="flipLightBox">
						<a href="crimebook.php"><img src="img/cat/CrimeThriller.png" class="img-responsive" alt=""></a>
						</a>
						<br>
						<a href="crimebook.php"><label>Crime And Thriller</label></p></a>
					</div>
				</figure>

				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center"><a href="img/cat/Textbooks.png" class="flipLightBox">
						<a href="textbook.php"><img src="img/cat/Textbooks.png" class="img-responsive" alt=""></a>
						</a>
						<br>
						<a href="textbook.php"><p align="center"><label>Textbooks</label></p></a>
					</div>
				</figure>
				
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/BiographiesMemories.png" class="flipLightBox">
							<a href="biobook.php"><img src="img/cat/BiographiesMemories.png" class="img-responsive" alt=""></a>
							</a>
							<br>
							<a href="biobook.php"><p align="center"><label>Biographies & Memories</label></p></a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/Business-Economics.png" class="flipLightBox">
							<a href="businessbook.php"><img src="img/cat/Business-Economics.png" class="img-responsive" alt=""></a>

							</a>
							<br>
							<a href="businessbook.php"><p align="center"><label>Business & Economics</label></p></a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/ExamCentral.png" class="flipLightBox">
							<a href="studybook.php"><img src="img/cat/ExamCentral.png" class="img-responsive" alt=""></a>

							</a>
							<br>
							<a href="studybook.php"><p align="center"><label>Study Aids & Exam Prep</label></p></a>
						</div>
					</figure>	
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<p align="center"><a href="img/cat/IndianWriting.png" class="flipLightBox">
							<a href="literaturebook.php"><img src="img/cat/IndianWriting.png" class="img-responsive" alt=""></a>

							</a>
							<br>
							<a href="literaturebook.php"><p align="center"><label>Literature</label></p></a>
						</div>
					</figure>
				</div>
			</div>
		</div>
		<div class="gallery">
			<div class="container">
				<div class="row">
					<figure class="effect-chico">						
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<p align="center"><a href="img/cat/Sci-fantasy.png" class="flipLightBox">
						<a href="scifibook.php"><img src="img/cat/Sci-fantasy.png" class="img-responsive" alt=""></a>
						</a>					
						<br>
						<a href="scifibook.php"><p align="center"><label>Sci-fi & Fantasy</label></p></a>
					</div>
				</figure>
				
				</div>
			</div>
		</div>
	</div><!--/#gallery-->
	
	
	
	
	
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>