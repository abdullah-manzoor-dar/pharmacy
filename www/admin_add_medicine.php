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
	?>
	<div class="container-contact100">
		<div class="wrap-login100"  style="width: 100%">
			<span class="contact100-form-title" style="text-align: center;">
				Add Medicine
			</span>
	<form action= "admin_view_medicine_backend.php" method="GET">
	<input type="hidden" name="identifier" value="2">
	<!-- echo 'Medicine ID: <input type="text" name="medicine_id" required="true"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Id is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="medicine_id" placeholder="Enter Medicine id" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Name: <input type="text" name="name" required="true"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Name is required">
		<!-- <span class="label-input100">Medicine Quantity</span> -->
		<input class="input100" type="text" name="name" placeholder="Enter Medicine Name" required="
	true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Maximum Count: <input type="text" name="max_count" required="true"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Max Count is required">
		<!-- <span class="label-input100">Medicine Quantity</span> -->
		<input class="input100" type="text" name="max_count" placeholder="Enter Medicine Max Count" required="
	true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Minimum Count: <input type="text" name="min_count" required="true"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Min Count is required">
		<!-- <span class="label-input100">Medicine Quantity</span> -->
		<input class="input100" type="text" name="min_count" placeholder="Enter Medicine Min Count" required="
	true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Cost: <input type="text" name="cost"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Cost is required">
		<!-- <span class="label-input100">Medicine Quantity</span> -->
		<input class="input100" type="text" name="cost" placeholder="Enter Medicine Cost" required="
	true">
		<span class="focus-input100"></span>
	</div>

	<!-- echo '<button type="submit">Add medicine</button>'; -->
	<div class="container-contact100-form-btn">
		<button class="contact100-form-btn" style="margin-left: 45%">
			<span>
				Add Medicine
				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
		</button>
	</div>
</form>
</center>
</body>
</html>