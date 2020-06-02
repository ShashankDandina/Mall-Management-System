<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
 	
 	$shop_name = $_POST['shop_name'];
 	$floor_number = $_POST['floor_number'];
 	$shop_type = $_POST['shop_type'];
 	$gst_number = $_POST['gst_number'];
 	$rent = $_POST['rent'];

if(isset($_POST['submit']))
{
	
	$query = "INSERT INTO shop_details(shop_name,floor_number,shop_type,gst_number,rent)
				VALUES('$shop_name','$floor_number','$shop_type','$gst_number','$rent');";
				mysqli_query($conn,$query);
				$_SESSION['success'];
				header('location:shop_details.php');
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

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">SHOP NAME</label><br>
        <input type="text" name="shop_name" pattern="(?=.*[a-z]).{3,}" title="must contain only alphabets"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">FLOOR NUMBER</label><br>
        <input type="text" name="floor_number" required pattern="(?=.[0-9]).{1, }" title="must contain only numbers"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">SHOP TYPE</label><br>
        <input type="text" name="shop_type" pattern="(?=.*[a-z]).{3,}" title="must contain only alphabets"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">GST NUMBER</label><br>
        <input type="text" name="gst_number"  required pattern="(?=.*[A-Z])(?=.*[0-9]).{10}"   required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">RENT</label><br>
        <input type="text" name="rent"required pattern="(?=.[0-9]).{1,}" title="must contain only numbers"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

        <input type="submit" name="submit" style="background-color:white; margin-left: 70px; border-radius: 20px; color: black;height: 35px;width: 140px; font-size: 20px">
		
		
	</form>	

	
</div>
</body>
</html>