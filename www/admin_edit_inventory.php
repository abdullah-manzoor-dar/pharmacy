<!DOCTYPE html>
<html>
<head>
	<title>Update Info</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util_form.css">
	<link rel="stylesheet" type="text/css" href="css/main_form.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util_table.css">
	<link rel="stylesheet" type="text/css" href="css/main_table.css">
</head>
<body>
<center>
	<?php
	require_once 'dbconnect.php';

	$inventory_id = $_GET["inventory_id"];
	$medicine_id = $_GET["medicine_id"];
	$quantity = $_GET["quantity"];
	$manufacture_date = $_GET["manufacture_date"];
	$expiry_date = $_GET["expiry_date"];
	$shelf_no = $_GET["shelf_no"];
	?>
	<div class="container-contact100">
		<div class="wrap-login100"  style="width: 100%">
			<span class="contact100-form-title" style="text-align: center;">
				Update Information
			</span>
	<form action= "admin_view_inventory_backend.php" method="GET">

	<input type="hidden" name="identifier" value="1">

	<!-- echo 'Inventory ID: <input type="text" name="inventory_id1" value="'.$inventory_id.'" readonly><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Inventory Id is required">
	<?php
	echo '<input class="input100" type="text" name="inventory_id1" value="'.$inventory_id.'" readonly><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Medicine ID: <input type="text" name="medicine_id1" placeholder="'.$medicine_id.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Id is required">
	<?php
	echo '<input class="input100" type="text" name="medicine_id1" value="'.$medicine_id.'" readonly><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Quantity: <input type="text" name="quantity1" placeholder="'.$quantity.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Quantity is required">
	<?php
	echo '<input class="input100" type="text" name="quantity1" value="'.$quantity.'" ><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Manufacture Date: <input type="text" name="manufacture_date1" placeholder="'.$manufacture_date.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Manufactre Date is required">
	<?php
	echo '<input class="input100" type="text" name="manufacture_date1" value="'.$manufacture_date.'" ><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Expiry Date: <input type="text" name="expiry_date1" placeholder="'.$expiry_date.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Expiry Date is required">
	<?php
	echo '<input class="input100" type="text" name="expiry_date1" value="'.$expiry_date.'" ><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Shelf No: <input type="text" name="shelf_no1" placeholder="'.$shelf_no.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Shelf No. is required">
	<?php
	echo '<input class="input100" type="text" name="shelf_no1" value="'.$shelf_no.'" ><br>';
	?>
		<span class="focus-input100"></span>
	</div>

	<!-- echo '<button type="submit">Edit</button>'; -->
	<div class="container-contact100-form-btn">
		<button class="contact100-form-btn" style="margin-left: 45%">
			<span>
				Submit
				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
		</button>
	</div>
</form>
</div>
</div>
</center>
</body>
</html>