<?php

/*$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/

session_start();
require_once 'dbconnect.php';

$selectSQL = "SELECT inventory_id,inventory.medicine_id as medicine_id,name,quantity,manufacture_date,expiry_date,shelf_no FROM inventory,medicine WHERE expiry_date < CURDATE() and medicine.medicine_id = inventory.medicine_id";
if( !( $selectRes = mysqli_query($con, $selectSQL ) ) )
{
	echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
}
else{
?>
<!DOCTYPE html>
<head>
	<title>View Medicines</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!--Include the above in your HEAD tag -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body style="margin:5%;padding:0; background-image:url('medicine.jpg'); background-repeat:no-repeat;background-size: cover">
<center>
<h1 style="font-size: 45px"><b>EXPIRED MEDICINES</b></h1><br><br>
<table border="2" style="background-color:white ; font-size: 20px">
	<thead>
	    <tr>
	    	<th width=10% style="text-align:center; font-size:25px">Inventory Id</th>
	    	<th width=10% style="text-align:center; font-size:25px">Medicine Id</th>
	    	<th width=10% style="text-align:center; font-size:25px">Name</th>
	       	<th width=10% style="text-align:center; font-size:25px">Quantity</th>
	       	<th width=10% style="text-align:center; font-size:25px">Manufacture Date</th>
	     	<th width=10% style="text-align:center; font-size:25px">Expiry Date</th>
	      	<th width=10% style="text-align:center; font-size:25px">Shelf no</th>
	    </tr>
	</thead>
	<tbody>
	    <?php
	      	if( mysqli_num_rows( $selectRes )==0 )
	      	{
	        	echo '<tr><td colspan="7">No Rows Returned</td></tr>';
	      	}
	      	else
	      	{
	      		// inventory_id	medicine_id	quantity	manufacture_date	expiry_date	shelf_no
	        	while( $row = mysqli_fetch_assoc( $selectRes ) ){
	          	echo "<tr><td>{$row['inventory_id']}</td><td>{$row['medicine_id']}</td><td>{$row['name']}</td><td>{$row['quantity']}</td><td>{$row['manufacture_date']}</td><td>{$row['expiry_date']}</td><td>{$row['shelf_no']}</td></tr>\n";
	        }
	      }
	    ?>
	</tbody> 
</table>
<div class="container-login100-form-btn">
<button style="width: 20%; font-size: 15px ;
     margin-top: 1%;  margin-right: 1%;
     position:relative;" class="login100-form-btn" onclick = "location.href='admin_home.php'" type="button" name="Back">Back to home</button>
</div>
</center>
</body>
<?php
 	}
?>