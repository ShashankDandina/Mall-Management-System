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
 	$owner_name = $_POST['owner_name'];

 	$password = $_POST['password'];
 	$query = mysqli_query($conn,"select * from owner_details where owner_name='$owner_name' && password='$password'");
 	$ret = mysqli_fetch_array($query);
 	if($ret>0)
 	{	
 		$_SESSION['mallmanagement']=$ret['owner_name'];
 		header('location:owner_page.php');


 }
 else 
 {
 	$msg="invalid details";
 }
}

?>








<!DOCTYPE html>
<html>
<head>
	<title>MALL MANAGEMENT</title>
</head>
<body style="background-image: url(front1.jpg);background-size:  1400px 700px " >
	<div style="color:white;margin-left: 230px; font-size: 100px ">MALL MANAGEMENT
		
	</div>
<div style="border:1px solid white;height: 350px;width: 300px; margin-left: 600px; margin-top: 150px;border-radius: 5px" >
	<form method="POST">
		<p style="color: white;  margin-left: 40px;  font-size: 25px">OWNER NAME</p>
		<input type="text" name="owner_name" pattern="(?=.*[a-z]).{5,}" required style="background: transparent;border: 1px solid white  ;border-radius: 10px; margin-left: 40px;  color: white;  height: 25px;margin-top: -50px; width: 200px"><br><br>
		<label style="color: white; margin-left: 40px;  font-size: 25px">PASSWORD</label><br>
		<input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain uppercase lowercase and character with length more than 8" required style="background: transparent;border: 1px solid white; margin-left: 40px;  color: white;border-radius: 10px ; height: 25px;width: 200px"><br><br><br>
		<input type="submit" name="submit" style="background-color:white; margin-left: 70px; border-radius: 20px; color: black;height: 35px;width: 140px; font-size: 20px">
		<button style="background-color:white; margin-left: 70px; margin-top: 20px; border-radius: 20px;color: black;height: 50px;width: 140px; font-size: 20px"><a href="applications.php">EMPLOYEE LOGIN</a>
		</button>
		
	</form>	

	
</div>
</body>
</html>