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
	$supplier_id=$_GET["supplier_id"];
	$medicine_id = $_GET["medicine_id"];
	$query = "DELETE FROM pending_requests WHERE medicine_id=$medicine_id and supplier_id=$supplier_id";
	$result = mysqli_query($con, $query);

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_pending_requests.php");
}
else if($identifier==2)
{
	$medicine_id = $_GET["medicine_id"];
	$supplier_id=$_GET["supplier_id"];
	$quantity = $_GET["quantity"];

	$query = "INSERT INTO pending_requests VALUES('$supplier_id', '$medicine_id', '$quantity')";
	$result = mysqli_query($con, $query);

	printf(mysqli_error($con));

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_pending_requests.php");
}

?>
