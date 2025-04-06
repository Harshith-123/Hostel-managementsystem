<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['adminsession']==0)) {
  header('location:logout.php');
  }
  $hId=$_GET['edit'];
	if(isset($_POST['add']))
  {
    $title=$_POST['title'];
    $fee=$_POST['fee'];
    $id=$_POST['id'];
    $query=mysqli_query($con,"update mess_tbl set messName = '$title',messFee='$fee' where messId=$id");
    //echo $query."print";
		if($query){
		echo '<script>alert("Mess Details Updated Successfully")</script>';
    }
    else{
     echo '<script>alert("Failed TO update Mess Details.")</script>';
    }
  }
  
   $get=mysqli_query($con,"select * from mess_tbl where messId=$hId");
  foreach($get as $Data):
	$titleg=$Data['messName'];
	$messFeeg=$Data['messFee'];
	$idg=$Data['messId']; 
	endforeach;
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
			<a href="#"><h1>👩🏻‍🎓🏠<span>Hostel Management</span></h1></a>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a  href="adminHome.php">Manage Hostel Type</a></li>
						<li class="agileits w3layouts"><a  href="manageHostel.php">Manage Hostel</a></li>
						<li class="agileits w3layouts"><a  href="manageMess.php">Manage Mess</a></li>
						<li class="agileits w3layouts"><a  href="manageStudent.php">Manage Student</a></li>
						<li class="agileits w3layouts"><a  href="manageData.php">Manage Attendance</a></li>
						<li class="agileits w3layouts"><a  href="manageRoom.php">Add Room</a></li>
						<li class="agileits w3layouts"><a  href="allotRoom.php">Allot Room</a></li>
						<li class="agileits w3layouts"><a  href="viewUser.php">View Bill</a></li>
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
				<h3>Update Mess</h3>
				<form action="#" method="post">
<br>
<br>
					<label for="exampleFormControlSelect2">Enter Mess Name</label>
					<br>
					<input type="text"  class="name" name="title" value="<?php echo $titleg;?>" pattern="^[a-zA-Z ]+$" value="<?php echo $titleg;?>" title="Only letters and Space" placeholder="Title" required="">
					<br>
					<br>
					<label for="exampleFormControlSelect2">Enter Mess Fee</label>
					<br>
					<input type="number"  class="name" name="fee" value="<?php echo $messFeeg;?>"  value="<?php echo $titleg;?>" title="Only letters and Space" placeholder="Title" required="">
					<br>
					<br>
					<input type="hidden"  class="name" name="id"   value="<?php echo $idg;?>"  placeholder="Title" required="">
					
					<input type="submit" name="add" value="Update Mess">
				</form>
			</div>	
			</div>
			</div>		
</div>		<div class="footer-w3l">
		<p> &copy; 2022 Online Hostel Management System</p>
	</div>
</body>
</html>