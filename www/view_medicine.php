<?php
	require_once 'dbconnect.php';
	$query = "SELECT medicine.medicine_id as id, medicine.name as name,	medicine.cost as cost, sum(inventory.quantity) as quantity
				FROM medicine, inventory
				WHERE medicine.medicine_id = inventory.medicine_id
				GROUP BY medicine.medicine_id, medicine.name, medicine.cost";
	$query_result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<head> 
	<title> View Medicines </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util_table.css">
	<link rel="stylesheet" type="text/css" href="css/main_table.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
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
		<h1 style="font-size: 40px"><b> MEDICINE </b></h1><br><br>
						<table border="2" style="background-color: white ;text-align: center; font-size: 20px">
								<thead>
									<tr>
										<th style="text-align: center; font-size:20px"> ID </th>
										<th style="text-align: center; font-size:20px" > Name </th>
										<th style="text-align: center; font-size:20px"> Cost </th>
										<th style="text-align: center; font-size:20px" > Available quantity </th>
										<th style="text-align: center; font-size:20px"> Add to cart </th>
										<th style="text-align: center;font-size:20px" > Choose quantity </th>
									</tr>
								</thead>
						<!-- </table> -->
					</div>
					<!-- <div class="table100-body js-pscroll"> -->
						<!-- <table border="2" style="background-color: white ; font-size: 20px"> -->
							<tbody>
								<form action="confirm_booking.php" method="POST" id='view_medicine'>
							<?php
								while ($row = mysqli_fetch_array($query_result)){
									// echo "<tr class='row100 body'>";
									echo "<td>".$row['id']."</td>";
									echo "<td>".$row['name']."</td>";
									echo "<td>".$row['cost']."</td>";
									echo "<td>".$row['quantity']."</td>";
									$row_quant = $row['quantity'];
									echo "<td class='cell100 column2'><input type='checkbox' name='addtocart[]' value='$row[id]' style='margin-left: 50% '></td>";
									echo "<td style='text-align: center;' class='cell100 column2'><input style='border: 2px solid #cdcdcd; border-color: rgba(0, 0, 0, .14); background-color:#aeefb2; font-size: 14px; font-weight: bold; text-align:center; width:100%' type='number' min='1' name='orderquantity".$row['id']."' max='$row_quant'></td>";
									echo "</tr>";
								}
							?>
								</form>
							</tbody>
						</table>

					<!-- <button style="padding: 5px 16px; border: 2px solid black; border-radius: 10px; color: black; font-size: 15px; font-style: bold" type='submit' form='view_medicine' name='Place Order' value = 'Place Order' align='bottom'> Place Order </button> -->
					<br>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" form="view_medicine">
						<span>
							Place Order
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<!-- </div> -->
				<br>
				<div>
					<!-- <button style="padding: 5px 16px; border: 2px solid black; border-radius: 10px; color: black; font-size: 15px; font-style: bold" class = "login100-form-btn" onclick="location.href='request_medicine.php'" type="button" name="Request New Medicine">Request New Medicine </button> -->
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="location.href='request_medicine.php'">
						<span>
							Request New Medicine
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<div class="container-contact100-form-btn">
				<button style=" font-size: 15px ;
				     margin-top: 1%;  margin-right: 1%;
				     position:relative;" class="contact100-form-btn" onclick = "location.href='customer_home.php'" type="button" name="Back">Back to home <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></button>
				</div>
				</div>
			</div>
		</div>
	</center>
</body>
</html>
