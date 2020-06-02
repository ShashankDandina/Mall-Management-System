
<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
 	
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
		<div>
		<ul>
			<li><a href="home.php">HOME PAGE</a></li>
			<li><a href="employee_details.php">EMPLOYEE DETAILS</a></li>
			<li><a href="shop_details.php">SHOP DETAILS</a></li>
			<li><a href="owner_details.php">OWNER DETAILS</a></li>
			<li><a href="advertisement_details.php">ADVERTISEMENT DETAILS</a></li>
			<li><a href="billing_details.php">BILLING DETAILS</a></li>
			<li><a href="applications.php">LOG OUT</a></li>
			

		</ul>

	</div>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>SHOP:</h4>
	<div class="form-body">
							<form method="post" name="search" action="">
								<p style="font-size:20px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  
							 <div class="form-group"> <label for="exampleInputEmail1">SEARCH BY SHOP ID</label> <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
						
							<br>
							  <button type="submit" name="search" class="btn btn-primary btn-sm">SEARCH</button> </form> 
						</div>

<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 

						<table class="table table-bordered"> <thead> <tr> <th>#</th> <th> SHOP ID</th> <th>SHOP NAME</th> <th>FLOOR NUMBER</th><th>SHOP TYPE</th><th>GST NUMBER</th><th>RENT</th><th>Action</th></tr> </thead> <tbody>
<?php
$ret=mysqli_query($conn,"select * from shop_details where shop_id ='$sdata';");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['shop_id'];?></td> <td><?php  echo $row['shop_name'];?></td><td><?php  echo $row['floor_number'];?></td><td><?php  echo $row['shop_type'];?></td> <td><?php  echo $row['gst_number'];?></td> <td><?php  echo $row['rent'];?></td>  <td><a href="update_shop2.php?editid=<?php echo $row['shop_id'];?>">EDIT</a></td> </tr>   
<?php 
$cnt=$cnt+1;
} } else { 
?>
  <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?></tbody> </table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		
        <!--//footer-->
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
<?php   ?>