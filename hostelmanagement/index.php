<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if(isset($_POST['login']))
  {
    $user=$_POST['username'];
    $password=($_POST['password']);
    $query=mysqli_query($con,"select adminId from admin_tbl where  adminMailId='$user' && adminPassword='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['adminsession']=$ret['adminId'];
     header('location:adminHome.php');
    }
	else{
	$querys=mysqli_query($con,"select studentId from student_tbl where  mailId='$user' && usn='$password' ");
    $rets=mysqli_fetch_array($querys);
    if($rets>0){
      $_SESSION['studentsession']=$rets['studentId'];
     header('location:userHome.php');
    }
    else{
     echo '<script>alert("Invalid Detail.")</script>';
    }
	}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Hostel Management System</title>
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
				<li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Sign In</a></li>
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
			<a href="#"><h1>👩🏻‍🎓🏠<span>Hostel Management</span></h1></a>
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
						<li class="agileits w3layouts"><a href="#" class="active">Home</a></li>
						</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

	<div class="banner">
		<h3>Online<span>Hostel </span>Management System</h3>
		<h4>Our goal is to manage student mess bills,room allotment etc</h4>
		<div class="arrow">
			<a href="#contact" class="scroll"><img src="images/arrow.png" alt=" " /></a>
		</div>
	</div>
	<!-- about -->
	<div class="about-w3-agile" id="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-6 wthree_about_grid_left">
					<h3>About us</h3>
							<p>Online Hostel  Management System</p>
									</div>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Modal Header</h4>
						  </div>
						  <div class="modal-body">
							<p></p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>
					</div>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-w3l">
		<p> &copy; 2022 Online Hostel Management System</p>
	</div>
<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3>Sign In </h3>
			<form action="#" method="post">
				<input type="text" name="username" class="email" placeholder="Enter Id" required=""/>
				<input type="password" name="password" class="password" placeholder="Password" required=""/>	
				<ul>
				
			</ul>
           <div class="clearfix"></div>
				<input type="submit" name="login" value="Sign In">
			</form>
	</div>
</div>
<div class="pop-up"> 
	<div id="small-dialog2" class="mfp-hide book-form">
		<h3>Sign Up</h3>
			<form action="#" method="post">
				<input type="text" name="username" pattern="^[a-zA-Z]+(\s{0,1}[a-zA-Z])*$" title="Invalid User name "  placeholder="Your Name" required=""/>
				<input type="email" pattern="^[\w.+\-]+@gmail\.com$" title="Invalid mailId" name="email" class="email" placeholder="Email" required=""/>
				<input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,10}$"  title="1 Upper case,1 lower case,digit,spl char min 6 max 10" name="password" class="password" placeholder="Password" required=""/>	
				<input type="text" pattern="^[a-zA-Z0-9,-]+(\s{0,1}[a-zA-Z0-9,-])*$" title="Invalid Address Pattern" name="address" class="password" placeholder="Address" required=""/>
				<input type="text" pattern="^([+]\d{2})?\d{10}$" title="Invalid Phone Number " name="mobile" class="password" placeholder="Phone Number" required=""/>
				<input type="submit" name="register" value="Sign Up">
			</form>
	</div>
</div>	
</body>
</html>