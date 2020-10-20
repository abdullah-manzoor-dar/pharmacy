<?php

// inventory_id	medicine_id	quantity	manufacture_date	expiry_date	shelf_no

session_start();
require_once 'dbconnect.php';
$selectSQL = "SELECT inventory_id,medicine.medicine_id as m_id,medicine.name as name, quantity,manufacture_date,expiry_date,shelf_no FROM inventory,medicine WHERE inventory.medicine_id=medicine.medicine_id";

if(!($selectRes = mysqli_query($con,$selectSQL)))
{
	echo 'retrieval of data from database failed -#'.mysqli_errno().':'.mysqli_error();
}
else
{
?>

<!DOCTYPE html>
<head>
	<title>View inventory</title>
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
	<h1 style="font-size: 45px"><b>INVENTORY</b></h1><br><br>
	<table border="2" style="background-color:white ; font-size: 20px">
		<thead>
			<tr>
				<th width=10% style="text-align:center; font-size:20px">Inventory ID</th>
				<th width=10% style="text-align:center; font-size:20px">Medicine ID</th>
				<th width=15% style="text-align:center; font-size:20px">Name</th>
				<th width=10% style="text-align:center; font-size:20px">Quantity</th>
				<th width=15% style="text-align:center; font-size:20px">Manufacture Date</th>
				<th width=15% style="text-align:center; font-size:20px">Expiry Date</th>
				<th width=10% style="text-align:center; font-size:20px">Shelf No.</th>
				<th width=10% style="text-align:center; font-size:20px">Edit</th>
	      		<th width=10% style="text-align:center; font-size:20px">Delete</th>
			</tr>
		</thead>
		<tbody  style="text-align:center;">
			<?php
			if(mysqli_num_rows($selectRes)==0)
				{
					echo '<tr><td colspan="9">No Rows Returned</td></tr>';
				}
				else
				{
					while($row=mysqli_fetch_array($selectRes))
					{
						echo"<tr>
						<td>{$row['inventory_id']}</td>
						<td>{$row['m_id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['quantity']}</td>
						<td>{$row['manufacture_date']}</td>
						<td>{$row['expiry_date']}</td>
						<td>{$row['shelf_no']}</td>";
						// Inventory ID	Medicine ID	Name	Quantity	Manufacture Date	Expiry Date	Shelf No.	Edit	Delete

						echo "<td align='center'><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\">
							<form action=\"admin_edit_inventory.php\" method=\"get\">
							
							<input type='hidden' name='identifier' value='1'>
							<input type='hidden' name='inventory_id' value='".$row['inventory_id']."'>
							<input type='hidden' name='medicine_id' value='".$row['m_id']."'>
							<input type='hidden' name='quantity' value='".$row['quantity']."'>
							<input type='hidden' name='manufacture_date' value='".$row['manufacture_date']."'>
							<input type='hidden' name='expiry_date' value='".$row['expiry_date']."'>
							<input type='hidden' name='shelf_no' value='".$row['shelf_no']."'>
							<button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"edit\" >
							<span class=\"glyphicon glyphicon-pencil\">
							</span>
							</button>
							</form>
							</p></td>";
				    	echo "<td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
				    		<form action=\"admin_view_inventory_backend.php\" method=\"get\">
							<input type='hidden' name='identifier' value='0'>
							<input type='hidden' name='inventory_id' value='".$row['inventory_id']."'>
				    		<button class=\"btn btn-danger btn-xs\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"delete\"><span class=\"glyphicon glyphicon-trash\"></span></button></p></td>";
						echo "</tr>\n";

					}
				}
				?>
		</tbody>
		<br>
		<br>

</table>
<br>
<div class="container-login100-form-btn">
<button style="width: 20%; font-size: 15px" class="login100-form-btn"  onclick="location.href='admin_add_inventory.php'" type="button" value="Add">Add to inventory</button>
</div>
<br>
<div class="container-login100-form-btn">
<button style="width: 20%; font-size: 15px" class="login100-form-btn" onclick = "location.href='admin_view_expired.php'" type="button" name="View Expired Medicines">View Expired Medicines</button>
</div>

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