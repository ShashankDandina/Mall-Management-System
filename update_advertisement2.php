<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
 	
if(isset($_POST['submit']))
  {
  	$advertisement_id = $_POST['advertisement_id'];
   	$name = $_POST['name'];
 	$floor_number = $_POST['floor_number'];
 	$from_date = $_POST['from_date'];
 	$to_date = $_POST['to_date'];
 	$rent= $_POST['rent'];
   
 $cid=$_GET['editid'];
     
   $query=mysqli_query($conn,"update advertisement_details set advertisement_id='$advertisement_id',name='$name',floor_number='$floor_number',from_date='$from_date',to_date='$to_date',rent='$rent' where advertisement_id='$cid';");
    if ($query) {
    $msg="advertisement details has been Updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Update employee</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<ul>
		<li><a href="home.php">HOME PAGE</a></li>
			<li><a href="employee_details.php">EMPLOYEE DETAILS</a></li>
			<li><a href="shop_details.php">SHOP DETAILS</a></li>
			<li><a href="owner_details.php">OWNER DETAILS</a></li>
			<li><a href="advertisement_details.php">ADVERTISEMENT DETAILS</a></li>
			<li><a href="billing_details.php">BILLING DETAILS</a></li>
			<li><a href="applications.php">LOG OUT</a></li>
			

	</ul>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Update advertisement details</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update details:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($conn,"select * from advertisement_details where advertisement_id='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							 <div class="form-group"> <label for="exampleInputEmail1">ADVERTISEMENT ID</label> <input type="text" class="form-control" id="sername" name="advertisement_id" placeholder="Service Name" value="<?php  echo $row['advertisement_id'];?>" required="true"> </div> <div class="form-group"> <label for="exampleInputPassword1">ADVERTISEMENT NAME</label> <input type="text" id="cost" name="name" class="form-control" placeholder="Cost" value="<?php  echo $row['name'];?>" required="true">
							 <label for="exampleInputPassword1">FLOOR NUMBER</label> <input type="text" id="cost" name="floor_number" class="form-control" placeholder="Cost" value="<?php  echo $row['floor_number'];?>" required="true"><label for="exampleInputPassword1">FROM DATE</label> <input type="text" id="cost" name="from_date" class="form-control" placeholder="Cost" value="<?php  echo $row['from_date'];?>" required="true"><label for="exampleInputPassword1">TO DATE</label> <input type="text" id="cost" name="to_date" class="form-control" placeholder="Cost" value="<?php  echo $row['to_date'];?>" required="true"> <label for="exampleInputPassword1">RENT</label> <input type="text" id="cost" name="rent" class="form-control" placeholder="Cost" value="<?php  echo $row['rent'];?>" required="true"></div>
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
	
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php  ?>