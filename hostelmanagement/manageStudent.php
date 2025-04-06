<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['adminsession']==0)) {
  header('location:logout.php');
  }
	if(isset($_POST['add']))
  {
    $name=$_POST['Name'];
    $mailId=$_POST['mailId'];
	$usn=$_POST['usn'];
	$get1=mysqli_query($con,"select * from student_tbl where mailId='$mailId' or usn='$usn'");
	//echo "print rows".mysqli_num_rows($get1);
	if(mysqli_num_rows($get1)==0)
	{
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $parentName=$_POST['parentName'];
    $sem=$_POST['sem'];
    $query=mysqli_query($con,"insert into student_tbl(studentName,mailId,mobile,usn,address,sem,parentName)values('$name','$mailId','$mobile','$usn','$address',$sem,'$parentName')");
    //echo $query."print";
	//$query1="insert into student_tbl(studentName,mailId,mobile,usn,address,sem,parentName)values('$name','$mailId','$mobile','$usn','$address',$sem,'$parentName')";
	echo $query1;
		if($query){
		echo '<script>alert("Student details Added Successfully")</script>';
    }
    else{
     echo '<script>alert("Failed TO Add Student details.")</script>';
    }
	}
	else{
		 echo '<script>alert("MailId or USN already Exists")</script>';
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
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<!-- about -->
	<div class="about-w3-agile" id="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-8 wthree_about_grid_left">
					<h3>Manage Student</h3>
							<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student MailId</th>
	  <th scope="col">Student USN</th>
      <th scope="col">Student Mobile</th>
      <th scope="col">Parent Name</th>
      <th scope="col">Address</th>
      <th scope="col">Sem</th>
	  <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $count=1;
  $get=mysqli_query($con,"select * from student_tbl");
  foreach($get as $Data):
	$studentName=$Data['studentName'];
	$mailId=$Data['mailId'];
	$mobile=$Data['mobile'];
	$address=$Data['address'];
	$parentName=$Data['parentName'];
	$sem=$Data['sem'];
	$usn=$Data['usn'];
	$id=$Data['studentId'];    
?>
    <tr>
    <th scope="row"><?=$count;?></th>
    <td><?=$studentName;?></td>
    <td><?=$mailId;?></td>
    <td><?=$usn;?></td>
    <td><?=$mobile;?></td>
    <td><?=$parentName;?></td>
	 <td><?=$address;?></td>
    <td><?=$sem;?></td>
	<td><a href="editStudent.php?edit=<?= $id ?>" class="text-danger">Edit</a></td>
   
	<td><a href="manageStudent.php?delete=<?= $id ?>" class="text-danger">Delete</a></td>
	 </tr>
	<?php
	$count+=1;
	endforeach;
	?>
  </tbody>
</table>
	</div>

<div class="col-md-7 contact-right-w3l">
				<h3>Add Student</h3>
				<form action="#" method="post">
<br>
<br>

					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Student Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Student  Name" tabindex="1">
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Student MailId</label>
                        <input type="text" class="form-control" id="mailId" name="mailId" placeholder="Student MailId" tabindex="1">
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Student Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Student Mobile Number" tabindex="1">
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Student USN</label>
                        <input type="text" class="form-control" id="usn" name="usn" placeholder="Student USN Number" tabindex="1">
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Student Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Student Address" tabindex="1">
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Parent Name</label>
                        <input type="text" class="form-control" id="parentName" name="parentName" placeholder="Parent Name" tabindex="1">
                    </div>
					<br>
					<br>
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">SEM</label>
                        <input type="number" class="form-control" id="sem" name="sem" placeholder="Student sem" min="1" max="8" tabindex="1">
                    </div>
					<br>
					<br>
					<input type="submit" name="add" value="Add Student">
				</form>
			</div>	
			</div>
			</div>		
</div>	
	<?php 

if(isset($_GET['delete'])){
    $del_id = $_GET['delete'];
     $update=mysqli_query($con,"delete from student_tbl where studentId='$del_id'" );
    if($update){
        redirect('manageStudent');
    }
    else{
        alert('Unable to delete Student details');
    }     
}
?>
	<div class="footer-w3l">
		<p> &copy; 2022 Online Hostel Management System</p>
	</div>
</body>
</html>