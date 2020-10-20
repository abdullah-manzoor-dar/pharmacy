<?php

session_start();
require_once 'dbconnect.php';

$selectSQL = "SELECT order_id,order_date,orders.customer_id as c_id,customer.name as c_name,orders.agent_id as a_id,delivery_agent.name as a_name,bill FROM orders,customer,delivery_agent WHERE customer.customer_id=orders.customer_id and orders.agent_id=delivery_agent.agent_id ";
if(!($selectRes = mysqli_query($con,$selectSQL)))
{
	echo 'retrieval of data from datbase failed -#'.mysqli_errno().':'.mysqli_error();
}
else{
?>

<!DOCTYPE html>
<head>
	<title>View Orders</title>
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
<body style="margin:5%;padding:0; background-image:url('medicine.jpg'); background-repeat:no-repeat;background-size: cover" >
<center>
	<h1 style="font-size: 45px"><b>ORDERS</b></h1><br><br>
	<table border ="2" style="background-color:white ; font-size: 20px">
		<thead>
			<tr>
				<th width=10% style="text-align:center; font-size:25px;">Order_id</th>
				<th width=20% style="text-align:center;
				font-size:25px">Date</th>
				<th width=10% style="text-align:center;
				font-size:25px">Customer ID</th>
				<th width=20% style="text-align:center;
				font-size:25px">Customer name</th>
				<th width=10% style="text-align:center;
				font-size:25px">Agent ID</th>
				<th width=20% style="text-align:center;
				font-size:25px">Agent name</th>
				<th width=20% style="text-align:center;
				font-size:25px">Bill</th>
			</tr>
		</thead>
		<tbody style="text-align:center;  border-radius:5px">
			<?php
				if(mysqli_num_rows($selectRes)==0)
				{
					echo '<tr><td colspan="7">No Rows Returned</td></tr>';
				}
				else
				{
					while($row=mysqli_fetch_array($selectRes))
					{
						echo"<tr>
						<td>{$row['order_id']}</td>
						<td>{$row['order_date']}</td>
						<td>{$row['c_id']}</td>
						<td>{$row['c_name']}</td>
						<td>{$row['a_id']}</td>
						<td>{$row['a_name']}</td>
						<td>{$row['bill']}</td>
						</tr>\n";

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