<?php
require_once 'dbconnect.php';
session_start();
$medicine_name = $_POST['medicine_name'];
$username = $_SESSION['username'];
if($username == ''){
	// $url= getAddress();
	// $scheme = parse_url($url, PHP_URL_SCHEME);
	// $user = parse_url($url, PHP_URL_USER);
	// $pass = parse_url($url, PHP_URL_PASS);
	// $host = parse_url($url, PHP_URL_HOST);
	// $port = parse_url($url, PHP_URL_PORT);
	// header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart");
	echo "<script type='text/javascript'>";
	echo "window.location.href = 'MediKart.php';";
	echo "</script>";
}
else{
	$insert_query = "INSERT INTO requests VALUES('$username','$medicine_name', NOW())";
	mysqli_query($con,$insert_query);
	printf(mysqli_error($con));
	echo "<script type='text/javascript'>";
	echo "alert('Request placed!'); ";
	echo "window.location.href = 'customer_home.php';";
	echo "</script>";
}