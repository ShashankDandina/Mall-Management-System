<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
if($_GET["action"] == "delete")
{

$shop_id=($_GET['shop_id']);
	$sql="DELETE FROM shop_details where shop_id=$shop_id";
	if($conn->query($sql)==true){
echo '<script>alert("shop has been removed")</script>';
echo '<script>window.location="shop_details.php"</script>';
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>MALL MANAGEMENT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<body style="background-image: url(front1.jpg);background-size:  1400px 700px " >
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

	<button style="background-color:white; margin-left: 20px; margin-top: 30px; color: black;height: 50px;width: 140px; font-size: 15px"><a href="update_shop1.php">UPDATE DETAILS</a>
		</button>
		<button style="background-color:white; margin-left: 20px; margin-top: 30px; color: black;height: 50px;width: 140px; font-size: 15px"><a href="register_shop.php">REGISTER SHOP</a>
		</button>
		
		</button>

</div>


<!-- tables -->
	
<div class="tables" >
<div class="table-responsive bs-example widget-shadow">
						<table class="table table-bordered" style="font-size: 20px"> <thead> <tr> <th>#</th> <th> SHOP ID</th> <th>SHOP NAME</th><th>FLOOR NUMBER</th> <th>SHOP TYPE</th><th>GST NUMBER</th><th>RENT</th><th>ACTION</th></tr> </thead> <tbody>
<?php
$ret=mysqli_query($conn,"select * from shop_details ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['shop_id'];?></td> <td><?php  echo $row['shop_name'];?></td><td><?php  echo $row['floor_number'];?></td><td><?php  echo $row['shop_type'];?></td> <td><?php  echo $row['gst_number'];?></td> <td><?php  echo $row['rent'];?> </td> <td><a href="shop_details.php?action=delete&shop_id=<?php echo $row["shop_id"]; ?>"><span class="text-danger">Remove</span></a></td>  </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
					</div>
</div>

<!--tables-->
		
	</body>
</head>
<html>