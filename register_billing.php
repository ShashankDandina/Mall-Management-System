<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
 	$billing_date = $_POST['billing_date'];
 	$amount = $_POST['amount'];
 	$type= $_POST['type'];
 	$staff_id = $_POST['staff_id'];
 	$shop_id = $_POST['shop_id'];
 	$advertisement_id = $_POST['advertisement_id'];

if(isset($_POST['submit']))
{
	$query = "INSERT INTO billing_details(billing_date,amount,type,staff_id,shop_id,advertisement_id)
				VALUES('$billing_date','$amount','$type','$staff_id','$shop_id','$advertisement_id');";
				mysqli_query($conn,$query);
				$_SESSION['success'];
				header('location:billing_details.php');
}


?>





<!DOCTYPE html>
<html>
<head>
	<title>MALL MANAGEMENT</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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

	</div>

<div style="border:1px solid white;height: 500px;width: 300px; margin-left: 600px; margin-top: 100px;border-radius: 5px" >
	<form method="POST">
		

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">BILLING DATE</label><br>
        <input type="DATE" name="billing_date"  title=" In yyyy-mm-dd"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">AMOUNT</label><br>
        <input type="text" name="amount" required pattern="(?=.[0-9]).{1, }" title="must contain only numbers"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">TYPE</label><br>
        <input type="text" name="type"  title="ONLY ALPHABETS, EXAMPLE ELECTRICITY BILL, WATER BILL "  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">STAFF ID</label><br>
        <input type="text" name="staff_id" pattern="(?=.*[0-9]).{1, }" title="must contain only numbers"    required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">SHOP ID</label><br>
        <input type="text" name="shop_id" title="must contain only numbers"   style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">ADVERTISEMENT ID</label><br>
        <input type="text" name="advertisement_id" title="must contain only numbers"   style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>


        <input type="submit" name="submit" style="background-color:white; margin-left: 70px; border-radius: 20px; color: black;height: 35px;width: 140px; font-size: 20px">
		
		
	</form>	

	
</div>
</body>
</html>