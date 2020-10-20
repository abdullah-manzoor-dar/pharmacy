<?php
require_once 'dbconnect.php';


$identifier = $_GET["identifier"];

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

$url= getAddress();
if($identifier==0)
{
	$customer_id = $_GET["customer_id"];
	$medicine_name = $_GET["medicine_name"];

	$query = "DELETE FROM requests WHERE customer_id='$customer_id' and medicine_name='$medicine_name'";

	$result = mysqli_query($con, $query);
	mysqli_error($con);
	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_medicine_requests.php");
}
?>
