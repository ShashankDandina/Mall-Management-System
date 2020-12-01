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

$staff_id=($_GET['staff_id']);
	$sql="DELETE FROM employee_details where staff_id=$staff_id";
	if($conn->query($sql)==true){
echo '<script>alert("employee has been removed")</script>';
echo '<script>window.location="employee_details.php"</script>';
}
}


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
	<body style="background-image: url(front1.jpg);background-size:  1400px 700px ">
<div>
	<button style="background-color:white; margin-left: 20px; margin-top: 30px; color: white;height: 50px;width: 140px; font-size: 15px"><a href="update_employee1.php">UPDATE DETAILS</a>
		</button>
		<button style="background-color:white; margin-left: 20px; margin-top: 30px; color: white;height: 50px;width: 140px; font-size: 15px"><a href="register_employee.php">REGISTER EMPLOYEE</a>
		</button>
		<button style="background-color:white; margin-left: 20px; margin-top: 30px; color: white;height: 50px;width: 140px; font-size: 15px"><a href="employee_history.php">EMPLOYEE HISTORY</a>
		</button>
		
        
</div>




<!-- tables -->
	
<div class="tables" >
<div class="table-responsive bs-example widget-shadow">
						<table class="table table-bordered" style="font-size: 20px"> <thead> <tr> <th>#</th> <th> STAFF ID</th> <th>NAME</th><th>DEPARTMENT</th> <th>POSITION</th><th>PHONE NUMBER</th><th>SALARY</th><th>ACTION</th>  </tr> </thead> <tbody>
<?php
$ret=mysqli_query($conn,"select * from employee_details ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['staff_id'];?></td> <td><?php  echo $row['name'];?></td><td><?php  echo $row['department'];?></td><td><?php  echo $row['position'];?></td> <td><?php  echo $row['phone_number'];?></td> <td><?php  echo $row['salary'];?></td> <td><a href="employee_details.php?action=delete&staff_id=<?php echo $row["staff_id"]; ?>"><span class="text-danger">Remove</span></a></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
					</div>
</div>

<!--tables-->
	</body>
</head>
<html>