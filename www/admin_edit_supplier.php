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

	$supplier_id = $_GET["supplier_id"];
	$name = urldecode($_GET["name"]);
	$address = urldecode($_GET["address"]);
	?>
	<div class="container-contact100">
		<div class="wrap-login100"  style="width: 100%">
			<span class="contact100-form-title" style="text-align: center;">
				Update Information
			</span>
	<form action= "admin_view_supplier_backend.php" method="GET" id="edit_supplier">

	<input type="hidden" name="identifier" value="2">;
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Supplier Id is required">
	<?php
	echo '<input class="input100" type="text" name="supplier_id" value="'.$supplier_id.'" readonly><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Supplier Name is required">
	<?php
		echo '<input class="input100" type="text" name="name1" value="'.urldecode($name).'"><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo '</form>'; -->
	<!-- echo '<span> Address </span>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Supplier Name is required">
	<?php
	echo '<input class="input100" type="text" name="address" value="'.urldecode($address).'">';
	?>
		<span class="focus-input100"></span>
	</div>
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