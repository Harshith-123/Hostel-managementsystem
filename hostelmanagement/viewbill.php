<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['adminsession']==0)) {
  header('location:logout.php');
  }
  $studentId=$_GET['view'];
  $getM=mysqli_query($con,"SELECT * from mess_tbl");
  foreach($getM as $Data1):
  $fee=$Data1['messFee'];
  endforeach;
	
  	if(isset($_POST['add']))
  {
    $fromDate=$_POST['fromDate'];
    $toDate=$_POST['toDate'];
	$id=$_POST['id'];
	$get=mysqli_query($con,"SELECT COUNT(attendStatus) AS STATUS,studentName,usn,sem FROM attend_tbl INNER JOIN student_tbl ON attend_tbl.studentId=student_tbl.studentId WHERE attendStatus = 'P' AND attend_tbl.studentId=$id and (attendDateTime between '$fromDate' and '$toDate')");
	foreach($get as $Data):
	$studentName=$Data['studentName'];
	$sem=$Data['sem'];
	$usn=$Data['usn'];
	$status=$Data['STATUS'];
	endforeach;
	?>
	<script>
	 name = '<?php echo $studentName; ?>';
	 stat = '<?php echo $status;?>';
	 from = '<?php echo $fromDate;?>';
	 to = '<?php echo $toDate;?>';
	 totalBill = '<?php echo $fee*$status;?>';
	</script>
	<?php
	echo '<script type="text/javascript">
			var newLine = "\r\n"
            var msg = "Student Name : "
            msg += name;
            msg += newLine;
            msg += "Number of Days Present in Hostel :";
            msg += stat;
			msg+= newLine;
			msg+="Total Bill Payable From(";
			msg+=from;
			msg+=") To ("; 
			msg+=to;
			msg+=") is : ";
			msg+= totalBill;
			 ';
echo "alert(msg)"; 
echo '</script>';
}
  ?>
<!DOCTYPE html>
<html lang="en">
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
				<div class="col-md-8 wthree_about_grid_left">
					<h3>Bill Details</h3>
					<form  action="" method="post">
					<div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Select From Date</label>
						<input type="date"  name="fromDate"  class="form-control" id="fromDate">
                      </div>
					  <div class="form-group">
                        <label class="form-label" id="nameLabel" for="name">Select From Date</label>
						<input type="date"  name="toDate" id="toDate"  class="form-control" id="fromDate">
                      </div>
					
					<input hidden value="<?php echo $studentId;?>"  name="id" id="id">
					<input type="submit"  name="add" id="add" value="Generate Bill">
				</form>
				</div>
				
	</div>
	</div>
</div>

<div id="myDiv">
</div>
<br>
<br>
<br>
<br>
<br>
<br>
	<div class="footer-w3l">
		<p> &copy; 2022 Online Hostel Management</p>
	</div>
</body>
</html>