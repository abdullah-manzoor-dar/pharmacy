<html>
<head>
	<title>Signup</title>
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
</head>
<body>
	<br><br>
	<center>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action = "signup-backend.php" method = "POST" >
						<span class="login100-form-title">
							Sign Up
						</span>

						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter you Name">
							<input class="input100" type="text" name="name" placeholder="Name">
							<span class="focus-input100"></span>
						</div>
						<!-- Name: <input name = "name" placeholder = "Name" required><br><br> -->
						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Please enter password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
						</div>
						<br>
						<div class="wrap-input100 validate-input" data-validate = "Please enter password again">
							<input class="input100" type="password" name="conf_password" placeholder="Confirm Password">
							<span class="focus-input100"></span>
						</div>
						<br>
						<!-- Username: <input name = "username" placeholder = "username" required><br><br> -->
						<!-- Password: <input name = "password" type = "password" placeholder = "Password" required><br><br> -->
						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter you Address">
							<input class="input100" type="text" name="address" placeholder="Address">
							<span class="focus-input100"></span>
						</div>
			<!-- Address: <input name = "address" placeholder = "Address" required><br><br> -->
						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Phone No.">
							<input class="input100" type="text" name="phoneno1" placeholder="Phone No">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Alternate Phone No.">
							<input class="input100" type="text" name="phoneno2" placeholder="Phone No(optional)">
							<span class="focus-input100"></span>
						</div>
			<!-- Phone no. <input name = "phoneno1" placeholder = "Phone No" required><br><br> -->
			<!-- Phone no.(optional) <input name = "phoneno2" placeholder = "Phone No(optional)"><br><br> -->
			<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
					<br>
			<!-- <button type = "submit">Submit</button> -->
			<!-- <button type="reset" value="Reset">Reset</button> -->
		</form>
	</div>
</div>
	</center>
</body>
</html>
