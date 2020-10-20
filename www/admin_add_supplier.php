<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Supplier</title>
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
			<div class="wrap-login100">
				<form class="contact100-form validate-form" action="admin_view_supplier_backend.php" method="GET">
					<span class="contact100-form-title">
						Add New Supplier
					</span>


					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Supplier Name is required">
						<input type='hidden' name='identifier' value='1'>
						<span class="label-input100">Supplier Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter Supplier name" required="true">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Supplier Address is required">
						<span class="label-input100">Supplier Address</span>
						<input class="input100" type="text" name="address" placeholder="Enter Supplier Address" required="true">
						<span class="focus-input100"></span>
					</div>

				<!-- Table Start -->
				<div class="container-table100">
					<div class="wrap-table100">
						<div class="table100 ver2 m-b-110">
							<div class="table100-head">
								<table border="2">
									<thead>
										<tr class="row100 head">
											<th style="text-align: center;" class="cell100 column2"> ID </th>
											<th style="text-align: center;" class="cell100 column1"> Name </th>
											<th style="text-align: center;" class="cell100 column2"> Select </th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="table100-body js-pscroll">
							<table>
								<tbody>
									<?php
										require_once 'dbconnect.php';
										$query = "SELECT medicine.medicine_id as id, medicine.name as name	  FROM medicine";
										$query_result = mysqli_query($con,$query);
										while ($row = mysqli_fetch_array($query_result)){
											echo "<tr class='row100 body'>";
											echo "<td style='text-align: center' class='cell100 column2'>".$row['id']."</td>";
											echo "<td style='text-align: center' class='cell100 column1'>".$row['name']."</td>";
											echo "<td class='cell100 column2'><input type='checkbox' name='selected[]' value='$row[id]' style='margin-left: 50%'></td>";
											echo "</tr>";
										}		
									?>
								</tbody>
							</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Table complete -->

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
