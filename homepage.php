<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>online Library System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
   <!-- <link rel="shortcut icon" href="themes/images/ico/favicon.ico">-->
    
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6 col-lg-3">Welcome!  <strong><?php
	echo   $_SESSION['usrname']
	?></strong></div>
	
 	<p align="right"><a href="mycartq.php"><button class="btn btn-primary" style="" name="logoutsubmit">mycart</button></a>
 	<a href="login.php"><button class="btn btn-primary" style="" name="logoutsubmit">logout</button></a></p>
 



 

</div>

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
<h2> Library  </h2>
  <div class="navbar-inner">
         
  
		<form class="form-inline navbar-search" method="post" action="searchinfo.php" >
				<input id="" class="" type="text" name="searchsai" placeholder="search using book name" />
				 <button name="searchsubmit" type="submit" class="btn btn-primary" style="width: 200">Go</button>
    </form>

    <ul id="topMenu" class="nav pull-right">
    	<select class="srchTxt" onchange="location = this.value;">
			<option value="homepage.php">All</option>
			<option value="laptop.php">REFERENCE BOOKS</option>
			<option value="phone.php">ARTICLES</option>
            <option value="desktop.php">E-JOURNALS</option>
            <option value="accessories.php">COMICS</option> 
		</select> 
    </ul>
  </div>
</div>
</div>
</div>
<h3 align="center">Upcoming Feed</h3><br>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			<a href=""><img style="width:90% " src="themes/images/carousel/71jfYCm30RL.jpg" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href=""><img style="width:100%" src="themes/images/carousel/main-qimg-120b9981a5f1ea1c30ba73e407837f27-c.jpg" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				 
				</div>
		  </div>
		  </div>
		  <div class="item">
		  <div class="container">
			<a href=""><img src="themes/images/carousel/" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  
				</div>
			
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href=""><img src="themes/images/carousel/" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  
				</div>
		   
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href=""><img src="themes/images/carousel/" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  
			</div>
		  </div>
		  </div>
		   <div class="item">
		   <div class="container">
			<a href=""><img src="themes/images/carousel/" alt=""/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  
				</div>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS</a>
				<ul>
				<li><a href="laptop.php"><i class="icon-chevron-right"></i>E-books<a></li>
				<li><a href="desktop.php"><i class="icon-chevron-right"></i>E-journals</a></li>
				<li><a href="phone.php"><i class="icon-chevron-right"></i>Reference books</a></li>
				<li><a href="accessories.php"><i class="icon-chevron-right">Articles</i></a></li>
				</ul>
			</li>
		</ul>
		<br/>
		  <div class="thumbnail">
			
		  </div><br/>
			<div class="thumbnail">
				
				
			  </div><br/>
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Featured Products <small class="pull-right"></small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="laptop.php"><img src="themes/images/products/1.jpg" alt=""></a>
					<div class="caption">
					  
					 
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
					<a href="laptop.php"><img src="themes/images/products/2.jpg" alt=""></a>
					<div class="caption">
					  
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="laptop.php"><img src="themes/images/products/3.jpg" alt=""></a>
					<div class="caption">
					  
					   
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="laptop.php"><img src="themes/images/products/4.jpg" alt=""></a>
					<div class="caption">
					  
					   
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a href="phone.php"><img src="themes/images/products/5.jpg" alt=""></a>
					<div class="caption">
					 
					  
					</div>
				  </div>
				</li>
				
				<li class="span3">
				  <div class="thumbnail">
					<a href="phone.php"><img src="themes/images/products/7.jpg" alt=""></a>
					<div class="caption">
					  
					  
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="desktop.php"><img src="themes/images/products/8.jpg" alt=""></a>
					<div class="caption">
					  
					  
					</div>
				  </div>
				</li>
			  </ul>
			  </div>
			   <div class="item">
			  <ul class="thumbnails">
				<li class="span3">
				  <div class="thumbnail">
					<a href="desktop.php"><img src="themes/images/products/9.jpg" alt=""></a>
					<div class="caption">
					  
					 
					</div>
				  </div>
				</li>
				
				
				
			  </ul>
			  </div>
			  </div>
			  
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
				
				<li class="span3">
				  <div class="thumbnail">
					<a  href="phone.php"><img src="themes/images/products/7.jpg" alt=""/></a>
					<div class="caption">
					  
					  <p> 
						 
					  </p>
					
					</div>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
					<a href="desktop.php"><img src="themes/images/products/8.jpg" alt=""/></a>
					<div class="caption">
					  
					  <p> 
						
					  </p>
					   
					</div>
				  </div>
				</li>
				
				<li class="span3">
				  <div class="thumbnail">
					<a   href="desktop.php?id=23"><img src="themes/images/products/10.jpg" alt=""/></a>
					<div class="caption">
					  
					  <p> 
						
					  </p>
					 
					</div>
				  </div>
				</li>
				
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>



</div>

<?php 

if (isset($_POST['searchsubmit'])) {
	# code...
  $searchsai=$_REQUEST['searchsai'];

//$query="select * from lolipop where productname='rog' ";
//$query_run = mysqli_query($con,$query);
$sql= mysqli_query($con ,"select * from lolipop where productname='$searchsai'");
while($row = mysqli_fetch_array($sql)){

echo  $row['productname'] ;
?>
,  
<?php 
echo  $row['pd'] ;
  ?>
 , <?php 
echo  $row['unitprice'] ;

  ?>

  <div class="col-lg-3 col-xs-5 "><img src="<?php echo $row['img_path'] ?>" style="width:320px"  ></div>


<?php

}
}
?>

<?php


if (isset($_POST['submit'])) {
 echo '<script type="text/javascript"> alert("Logout Successfull") </script>';

}





  ?>


</body>
</html>




