<!DOCTYPE html>
<html>
<head>
	<title>Update agent info</title>
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
				Add Delivery Agent
			</span>
	<form action="admin_view_agent_backend.php" method="GET">
	<input type="hidden" name="identifier" value="2">
	<!-- echo 'Agent ID:<input type="text" name="agent_id"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Agent ID is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="agent_id" placeholder="Enter Agent id" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Name: <input type="text" name="name"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Agent name is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="name" placeholder="Enter Agent name" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Salary: <input type="text" name="salary"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Agent salary is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="salary" placeholder="Enter Agent salary" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Address: <input type="text" name="address"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Agent Address is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="address" placeholder="Enter Agent Address" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo '<button type="submit">Add Supplier</button>'; -->
	<div class="container-contact100-form-btn">
		<button class="contact100-form-btn" style="margin-left: 45%">
			<span>
				Add Agent
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