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
<!-- <h3>Update information</h3>	 -->
	<?php
	require_once 'dbconnect.php';

	$medicine_id = $_GET["medicine_id"];
	$name = $_GET["name"];
	$max_count = $_GET["max_count"];
	$min_count = $_GET["min_count"];
	$cost = $_GET["cost"];
	?>
	<div class="container-contact100">
		<div class="wrap-login100"  style="width: 100%">
			<span class="contact100-form-title" style="text-align: center;">
				Update Information
			</span>
	<form action= "admin_view_medicine_backend.php" method="GET">

	<input type="hidden" name="identifier" value="1">
	<!-- echo 'medicine_id: <input type="text" name="medicine_id1" value="'.$medicine_id.'" readonly><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Id is required">
	<?php
	echo '<input class="input100" type="text" name="medicine_id1" value="'.$medicine_id.'" readonly><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'name: <input type="text" name="name1" placeholder="'.$name.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine Name is required">
	<?php
		echo '<input class="input100" type="text" name="name1" value="'.urldecode($name).'"><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'max_count: <input type="text" name="max_count1" placeholder = "'.$max_count.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Max Count is required">
	<?php
		echo '<input class="input100" type="text" name="max_count1" value="'.$max_count.'"><br>';
	?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'min_count: <input type="text" name="min_count1" placeholder = "'.$min_count.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Min Count is required">
	<?php
		echo '<input class="input100" type="text" name="min_count1" value="'.$min_count.'"><br>';
	?>
		<span class="focus-input100"></span>
	</div>

	<!-- echo 'cost: <input type="text" name="cost1" placeholder="'.$cost.'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Cost is required">
	<?php
		echo '<input class="input100" type="text" name="cost1" value="'.$cost.'"><br>';
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