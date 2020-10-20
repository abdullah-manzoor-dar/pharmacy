<!DOCTYPE html>
<html>
<head>
	<title>Add pending request</title>
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
<div class="container-contact100">
		<div class="wrap-login100"  style="width: 100%">
			<span class="contact100-form-title" style="text-align: center;">
				Add A Request to Supplier
			</span>
<form action= "admin_view_pending_request_backend.php" method="GET">
	<input type="hidden" name="identifier" value="2">;
	<!-- echo 'Supplier ID: <input type="text" name="supplier_id"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Supplier ID is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="supplier_id" placeholder="Enter Supplier id" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Medicine ID: <input type="text" name="medicine_id"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Medicine ID is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="medicine_id" placeholder="Enter Medicine id" required="true">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Quantity: <input type="text" name="quantity"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Quantity is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="text" name="quantity" placeholder="Enter Quantity id" required="true">
		<span class="focus-input100"></span>
	</div>
	<div class="container-contact100-form-btn">
		<button class="contact100-form-btn" style="margin-left: 45%">
			<span>
				Add Request
				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
		</button>
	</div>
	<!-- echo '<button type="submit">Add pending request</button>'; -->
</form>
</center>
</body>
</html>