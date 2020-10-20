<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
<body style="margin:5%;padding:0; background-image:url('medicine.jpg'); background-repeat:no-repeat;background-size: cover"  >
<!-- background-color:#edb6aa;"  -->
<!-- /*#99e5e8; #efd7ed"*/ -->
<center>
<h1 style="font-size: 35px"><b> Your medicine requests </b></h1><br><br>
	<?php
		session_start();
		$username = $_SESSION["username"];
		require_once 'dbconnect.php';
		$query = "SELECT medicine_name, curr_date
				  FROM requests
				  WHERE customer_id = '$username'";
		$query_result = mysqli_query($con, $query);
		printf(mysqli_error($con));
	?> 
	<!-- <h3>Your medicine requests</h3> -->


	<table border="2" style="background-color:white ; font-size: 20px">
		<tr>
			<th> Medicine Name</th>
			<th> Request date</th>
		</tr>
		<?php
			while($row = mysqli_fetch_array($query_result))
			{
				echo "<tr>";
				echo "<td>".$row['medicine_name']."</td>";
				echo "<td>".$row['curr_date']."</td>";
				echo "</tr>";
			}
		?>
	</table>
	<br>
</center>

<div class="container-login100-form-btn">
<button  style="font-size: 15px; width: 15%" class="login100-form-btn" onclick = "location.href='customer_home.php'" type="button" name="Back">Back to home</button>
</div>	
</body>
</html>

<!-- style="font-size: 15px ; margin-left: 45%"" -->