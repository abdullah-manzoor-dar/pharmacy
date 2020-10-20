<?php

session_start();
require_once 'dbconnect.php';

$selectSQL = "SELECT customer.customer_id as customer_id,customer.name as name,medicine_name FROM customer, requests WHERE customer.customer_id=requests.customer_id ";
if(!($selectRes = mysqli_query($con,$selectSQL)))
{
	echo 'retrieval of data from database failed -#'.mysqli_errno().':'.mysqli_error();
}
else{
?>

<!DOCTYPE html>
<head>
	<title>View Customer Requests</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
	<h1 style="font-size: 45px"><b>Customer Medicine Request</b></h1><br><br>
	<table border ="2" style="background-color:white ; font-size: 20px">
		<thead>
			<tr>
				<th width=20% style="text-align:center; font-size:25px">Customer ID</th>
				<th width=30% style="text-align:center; font-size:25px">Customer name</th>
				<th width=30% style="text-align:center; font-size:25px">Medicine Name</th>
				<th width=20% style="text-align:center; font-size:25px">Delete</th>
			</tr>
		</thead>
		<tbody style="text-align:center;">
			<?php
				if(mysqli_num_rows($selectRes)==0)
				{
					echo '<tr><td colspan="4">No Rows Returned</td></tr>';
				}
				else
				{
					while($row=mysqli_fetch_array($selectRes))
					{
						echo"<tr>
						<td>{$row['customer_id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['medicine_name']}</td>";
						echo "<td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
		    			<form action=\"admin_view_medicine_requests_backend.php\" method=\"get\">
			    		<input type='hidden' name='identifier' value='0'>
			    		<input type='hidden' name='customer_id' value='".$row['customer_id']."'>
			    		<input type='hidden' name='medicine_name'value='".$row['medicine_name']."'>
			    		<button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"delete\" >
			    		<span class=\"glyphicon glyphicon-trash\">
			    		</span></button></form></p></td>";
				    	echo "";
			          	echo "</tr>\n";

					}
				}
				?>
		</tbody>
		<br>
		<br>

</table>
<div class="container-login100-form-btn">
<button style="width: 20%; font-size: 15px ;
     margin-top: 1%;  margin-right: 1%;
     position:relative;" class="login100-form-btn" onclick = "location.href='admin_home.php'" type="button" name="Back">Back to home</button>
</div>
</center>
<?php
}
?>