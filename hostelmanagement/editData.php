<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['adminsession']==0)) {
  header('location:logout.php');
  }

	$editkeyId=$_GET['edit'];

	if(isset($_POST['addData']))
  {
		$keywordId=$_POST['keywordId'];
    $url=$_POST['url'];
		$keyword=$_POST['description'];
    $query=mysqli_query($con,"update keyword_data_tbl set  description ='$keyword',url='$url' where dataId='$keywordId'");
   // echo $query."print";
		if($query){
		echo '<script>alert("Keyword Data Updated Successfully")</script>';
    }
    else{
     echo '<script>alert("Failed TO Update Keyword Data.")</script>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Search Engine</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inspire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- Popup-Box-JavaScript -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
</head>
<body>
	<div class="header">
		<div class="container">
			
			<div class="w3l_header_right">
				<ul>
				<br>
	
					<li><a  href="logout.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a></li>
				<br>
				</ul>
				<br>
				<br>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="logo-w3">
			<a href="#"><h1><img src="images/logo.png" alt=" " /><span>Search Engine</span></h1></a>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a  href="adminHome.php">Manage Keywords</a></li>
						<li class="agileits w3layouts"><a  href="manageData.php">Manage Data</a></li>
						<li class="agileits w3layouts"><a  href="viewUser.php">View User</a></li>
							</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<!-- about -->
	<div class="about-w3-agile" id="about">
		<div class="container">
			<div class="wthree_about_grids">
<div class="col-md-7 contact-right-w3l">
				<h3>Update Data</h3>
					<?php
				 $get=mysqli_query($con,"select * from keyword_data_tbl inner join keyword_tbl on keyword_data_tbl.keywordId=keyword_tbl.keywordId  where keyword_data_tbl.dataId='$editkeyId'");
  			foreach($get as $Data):
				$desc=$Data['description'];
				$title=$Data['title'];
				$id=$Data['dataId'];
				$url=$Data['url'];
				endforeach;
				?>
				<form action="#" method="post">
<br>
<br>
<input hidden value="<?php echo $id;?>" name="keywordId">
				
					<label for="exampleFormControlSelect2">Keyword Title : <?php echo $title;?></label>
					<br>
					<br>
					<label for="exampleFormControlSelect2">Eneter Description </label>
					<br>
					<textarea class="name" name="description"  placeholder="Description" required="">
				<?php echo $desc;?>	
				</textarea>
					<br>
					<br>
						<label for="exampleFormControlSelect2">Eneter URL</label>
					<br>
					<input type="text" class="name" value="<?php echo $url;?>" name="url" placeholder="URL" required="">
					<br>
					<br>
					<input type="submit" name="addData" value="Add Data">
				</form>
			</div>	
			</div>
			</div>		
</div>	

	<div class="footer-w3l">
		<p> &copy; 2022 Online Search Engine</p>
	</div>
</body>
</html>