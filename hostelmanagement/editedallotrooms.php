<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['adminsession']==0)) {
  header('location:logout.php');
  }
$a_id = $_GET['allotId'];

$call = mysqli_query($con,"SELECT * FROM student_tbl WHERE studentId='$a_id'");
foreach($call as $rowS);


	if(isset($_POST['add']))
  {
    $studentId=$_POST['studentId'];
    $type=$_POST['type'];
    $query=mysqli_query($con,"insert into allot_tbl(studentId,roomId)values('$studentId','$type')");
    //echo $query."print";
		if($query){
		echo '<script>alert("Room allotted Successfully")</script>';
		$queryG=mysqli_query($con,"update room_tbl set capacity=capacity-1 where roomId = $type");
    //echo $query."print";
		if($queryG){
		 header('location:allotRoom.php');
    }
		}
    else{
     echo '<script>alert("Failed TO allotted Room .")</script>';
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
				<h3>Allot Room</h3>
	<form id="contact-form"  action="" method="post">
	<div class="text-center mt-5">
	<label>Student Name : <?=$rowS['studentName'];?> </label>
	<br>
	<br>
	<label>Student gender : <?=$rowS['gender'];?> </label>
	<br>
	<br>
	<input hidden value="<?php echo $rowS['studentId'];?>" name="studentId">
		<div class="text-center mt-5">
					<select class="form-group" name="type" id="type">
					<option value="">Select Room</option>
							<?php
								 $roomId=0;
								$get=mysqli_query($con,"SELECT * FROM room_tbl INNER JOIN hostel_tbl ON room_tbl.hostelId=hostel_tbl.hostelId INNER JOIN hostel_type ON hostel_tbl.hostelTypeId=hostel_type.hostelTypeId");
								foreach($get as $row):
								if($row['capacity']!=0)
								{
								?> 
							<option value="<?= $row['roomId']; ?>" selected="selected"><?=$row['roomNum'];?>  / <?=$row['hostelName'];?> /  <?=$row['hostelType'];?></option>
							
							<?php
								$roomId=$row['roomId'];
								}else{
							?>
							<option value="<?=$row['roomId']; ?>"><?=$row['roomNum'];?></option>
							<?php
								$roomId=$row['roomId'];
								}
								endforeach;
							?>
										</select>
						</div>
						  <div class="text-center mt-5">
                        <button type="submit" id="add" name="add" class="serv_bottom btn btn-border btn-lg w-100">Allot</button>
                    </div>
						</form>
           
			</div>	
			</div>
			</div>		
</div>	
<br>
<br>
<br>
<br>
	<div class="footer-w3l">
		<p> &copy; 2022 Online Hostel Management System</p>
	</div>
</body>
</html>