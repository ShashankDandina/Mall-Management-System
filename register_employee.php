<?php
session_start();
error_reporting(0);
$dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $db = 'mall_management';
 $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connection failed: %s\n". $conn -> error);
 	$name = $_POST['name'];
 	$department = $_POST['department'];
 	$position = $_POST['position'];
 	$phone_number = $_POST['phone_number'];
 	$salary = $_POST['salary'];
 	$password = $_POST['password'];

if(isset($_POST['submit']))
{
	//echo"welcome"
	$query = "INSERT INTO employee_details(name,department,position,phone_number,salary,password)
				VALUES('$name','$department','$position','$phone_number','$salary','$password');";
				mysqli_query($conn,$query);
				$_SESSION['success'];
				header('location:employee_details.php');
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
		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">NAME</label><br>
        <input type="text" name="name" pattern="(?=.*[a-z]).{3,}" title="must contain only alphabets"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">DEPARTMENT</label><br>
        <input type="text" name="department" title="must contain only management,security or maintainance(no caps)"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">POSITION</label><br>
        <input type="text" name="position"title="must contain only MANAGER OR WORKER"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">PHONE NUMBER</label><br>
        <input type="text" name="phone_number"  required pattern="(?=.[0-9]).{10}"   required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

		<label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">SALARY</label><br>
        <input type="text" name="salary"required pattern="(?=.[0-9]).{2,}" title="must contain only numbers"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>
        <label style="color: white; margin-left: 50px;margin-top: 10px ; font-size: 25px">PASSWORD</label><br>
        <input type="text" name="password"required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain uppercase lowercase and character with length more than 8"  required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>

        <input type="submit" name="submit" style="background-color:white; margin-left: 70px; border-radius: 20px; color: black;height: 35px;width: 140px; font-size: 20px">
		
		
	</form>	

	
</div>
</body>
</html>