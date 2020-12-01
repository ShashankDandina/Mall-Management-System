<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
?>

<!DOCTYPE html>
<html>
<head>
	<title>MALL MANAGEMENT</title>
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
	<body style="background-image: url(front1.jpg);background-size:  1400px 700px " >
<div>
		<button style="background-color:white; margin-left: 20px; margin-top: 20px; color: white;height: 50px;width: 140px; font-size: 15px"><a href="register_billing.php">ENTER BILL DETAILS</a>
		</button>
	
</div>













<!-- tables -->
	
<div class="tables" >
<div class="table-responsive bs-example widget-shadow">
						<table class="table table-bordered" style="font-size: 20px"> <thead> <tr> <th>#</th> <th> TRANSACTION ID</th> <th>BILLING DATE</th><th>AMOUNT</th> <th>TYPE</th><th>STAFF ID</th><th>SHOP ID</th><th>ADVERTISEMENT ID</th></tr> </thead> <tbody>
<?php
$ret=mysqli_query($conn,"select * from billing_details ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['transaction_id'];?></td> <td><?php  echo $row['billing_date'];?></td><td><?php  echo $row['amount'];?></td><td><?php  echo $row['type'];?></td> <td><?php  echo $row['staff_id'];?></td> <td><?php  echo $row['shop_id'];?></td> <td><?php echo $row['advertisement_id'];?></td></tr><?php 
$cnt=$cnt+1;
}?></tbody> </table> 
</div>
</div>

<!--tables-->
		
	</body>
</head>
<html>