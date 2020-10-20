<?php
    require_once 'dbconnect.php';
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<style type="text/css">

				@font-face {
						font-family: FontinBold;
						src: url("/static/fonts/Fontin-Bold.ttf");
				}

				@font-face {
						font-family: Fontin;
						src: url("/static/fonts/Fontin-Regular.ttf");
				}

				.portfolio-item {
						display: block;
						position: relative;
						overflow: hidden;
						max-width: 530px;
						margin: auto auto 1rem
				}

				.portfolio-item .caption {
						display: -webkit-box;
						display: -ms-flexbox;
						display: flex;
						height: 100%;
						width: 100%;
						background-color: rgba(33,37,41,.2);
						position: absolute;
						top: 0;
						bottom: 0;
						z-index: 1
				}

				.portfolio-item .caption .caption-content {
						color: #fff;
						margin: auto 2rem 2rem
				}

				.portfolio-item .caption .caption-content h2 {
						font-size: .8rem;
						text-transform: uppercase
				}

				.portfolio-item .caption .caption-content p {
						font-weight: 300;
						font-size: 1.2rem
				}

				@media (min-width: 992px) {
						.portfolio-item {
								max-width:none;
								margin: 0
						}

						.portfolio-item .caption {
								-webkit-transition: -webkit-clip-path .25s ease-out,background-color .7s;
								-webkit-clip-path: inset(0);
								clip-path: inset(0)
						}

						.portfolio-item .caption .caption-content {
								-webkit-transition: opacity .25s;
								transition: opacity .25s;
								margin-left: 5rem;
								margin-right: 5rem;
								margin-bottom: 5rem
						}

						.portfolio-item img {
								-webkit-transition: -webkit-clip-path .25s ease-out;
								-webkit-clip-path: inset(-1px);
								clip-path: inset(-1px)
						}

						.portfolio-item:hover img {
								-webkit-clip-path: inset(2rem);
								clip-path: inset(2rem)
						}

						.portfolio-item:hover .caption {
								background-color: rgba(29,128,159,.9);
								-webkit-clip-path: inset(2rem);
								clip-path: inset(2rem)
						}
				}

				@media (min-width: 576px) {
						.container {
								max-width: 540px;
						}
				}
				@media (min-width: 768px) {
						.container {
								max-width: 940px;
						}
				}
				@media (min-width: 992px) {
						.container {
								max-width: 960px;
						}
				}
				@media (min-width: 1200px) {
						.container {
								max-width: 980px;
						}
				}

				.background {
						position: fixed;
						bottom: 0;
						left: 0;
						z-index: -1;
				}

				.background img {
						width: 100vw;
						filter: brightness(0.4);
				}

				body {
						overflow-x: hidden;
				}

				.heading {
						color: white;
						text-transform: uppercase;
						font-size: 2em;
						text-align: center;
						font-weight: bold;
						font-family: FontinBold, sans-serif;
				}
				
				@media (max-width: 1167px) {
						.background img {
								height: 100vh;
								width: auto;
						}
				}

		</style>

	</head>

	<body>
			<br><br><br><br><br><br><br><br><br>
			<div class="heading" style="font-size: 45px">
					Welcome Adminstrator
					<button onclick="location.href='logout.php'" type="button" name="logout" style="font-size:18px;position: absolute; top: 5%; left: 90%;">Logout</button>
			</div>
			<br><br><br><br><br><br><br><br><br>
			<div class="background">
					<!-- <img src="1.JPG" height="200px" width="200px"> -->
					<img src="images/admin_background.jpg">
			</div>
			<div class="container">
				<div class="row no-gutters">

					<div class="col-md-6 box">
						<a class="portfolio-item" href="admin_view_medicine.php">
							<span class="caption">
								<span class="caption-content">
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View Medicine Information</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/medicine_info.jpg" alt="">
						</a>
					</div>

					<div class="col-md-6 box">
						<a class="portfolio-item" href="admin_view_orders.php">
							<span class="caption">
								<span class="caption-content">
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View customer orders</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/view_orders.jpg" alt="">
						</a>
					</div>

					<div class="col-md-6 box">
						<a class="portfolio-item" href="admin_view_supplier.php">
							<span class="caption">
								<span class="caption-content">
									<!-- <p class="mb-0" style="font-family: Fontin;">I am a</p> -->
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View suppliers</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/supplier_act.jpg" alt="">
						</a>
					</div>

					<div class="col-md-6 box" style="overflow: hidden; ">
						<a class="portfolio-item" href="admin_view_agents.php">
							<span class="caption">
								<span class="caption-content">
									<!-- <p class="mb-0" style="font-family: Fontin;">I am an</p> -->
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View Delivery Agents</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/agents.jpg" alt="">
						</a>
						<!-- style=" object-fit: cover;" height=100% width=100%  -->
					</div>

					<div class="col-md-6 box">
						<a class="portfolio-item" href="admin_view_inventory.php">
							<span class="caption">
								<span class="caption-content">
									<!-- <p class="mb-0" style="font-family: Fontin;">I am an</p> -->
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View Inventory</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/inventory.jpg" alt="">
						</a>
					</div>

					<div class="col-md-6 box">
						<a class="portfolio-item" href="admin_view_customers.php">
							<span class="caption">
								<span class="caption-content">
									<!-- <p class="mb-0" style="font-family: Fontin;">I am an</p> -->
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View customers</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/customers.jpg" alt="">
						</a>
					</div>

					<div class="col-md-6 box" style="background-color: #fff">
						<a class="portfolio-item" href="admin_view_pending_requests.php">
							<span class="caption">
								<span class="caption-content">
									<!-- <p class="mb-0" style="font-family: Fontin;">I am an</p> -->
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View pending requests to suppliers</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/pending_requests.png" alt="">
						</a>
					</div>

					<div class="col-md-6 box">
						<a class="portfolio-item" href="admin_view_medicine_requests.php">
							<span class="caption">
								<span class="caption-content">
									<!-- <p class="mb-0" style="font-family: Fontin;">I am an</p> -->
									<h2 style="font-size: 1.7em;" style="font-family: FontinBold">View customer medicine requests</h2>
								</span>
							</span>
							<img class="img-fluid" src="images/requests.jpg" alt="">
						</a>
					</div>
					<br><br>
				</div>
			</div>

	<script type="text/javascript">

		var h = (window.innerHeight - document.getElementsByClassName("container")[0].clientHeight - document.getElementsByClassName("heading")[0].clientHeight)/3;
		if(h>0 && window.innerWidth >= 768) {
			document.getElementsByClassName("container")[0].style.marginTop = h + 'px';
			document.getElementsByClassName("container")[0].style.marginBottom = h + 'px';
			document.getElementsByClassName("heading")[0].style.marginTop = h + 'px';
		}
		else {
				document.getElementsByClassName("container")[0].style.marginTop = '15px';
			document.getElementsByClassName("container")[0].style.marginBottom = '15px';
			document.getElementsByClassName("heading")[0].style.marginTop = '15px';
				}

	</script>

	</body>

</html>