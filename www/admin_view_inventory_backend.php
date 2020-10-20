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
	$inventory_id = $_GET["inventory_id"];
	$query = "DELETE FROM inventory WHERE inventory_id=$inventory_id";
	$result = mysqli_query($con, $query);

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_inventory.php");
}
else if($identifier==1)
{

	$inventory_id = $_GET["inventory_id1"];
	$medicine_id = $_GET["medicine_id1"];
	$quantity = $_GET["quantity1"];
	$manufacture_date = $_GET["manufacture_date1"];
	$expiry_date = $_GET["expiry_date1"];
	$shelf_no = $_GET["shelf_no1"];

	if($medicine_id!='')
	{
		// echo 'here';
		$query = "UPDATE inventory SET medicine_id='$medicine_id' WHERE inventory_id='$inventory_id'";
		$result = mysqli_query($con, $query);
		mysqli_error($con);
	}
	if($quantity!='')
	{
		$query = "UPDATE inventory SET quantity='$quantity' WHERE inventory_id='$inventory_id'";
		$result = mysqli_query($con, $query);
		mysqli_error($con);

	}
	if($manufacture_date!='')
	{
		$query = "UPDATE inventory SET manufacture_date=(DATE '$manufacture_date') WHERE inventory_id='$inventory_id'";
		$result = mysqli_query($con, $query);
		mysqli_error($con);

	}
	if($expiry_date!='')
	{
		$query = "UPDATE inventory SET expiry_date= DATE '$expiry_date' WHERE inventory_id='$inventory_id'";
		$result = mysqli_query($con, $query);
		mysqli_error($con);

	}
	if($shelf_no!='')
	{
		$query = "UPDATE inventory SET shelf_no	='$shelf_no' WHERE inventory_id='$inventory_id'";
		$result = mysqli_query($con, $query);
		mysqli_error($con);

	}
	// $query = "UPDATE medicine SET name='$name' and max_count='$max_count' and min_count='$min_count' 
	// 			and cost='$cost'
	// 		  WHERE medicine_id='$medicine_id'";
	// $result = mysqli_query($con, $query);

	printf(mysqli_error($con));

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_inventory.php");

}
else if($identifier==2)
{
	$inventory_id = $_GET["inventory_id"];
	$medicine_id = $_GET["medicine_id"];
	$quantity = $_GET["quantity"];
	$manufacture_date = $_GET["manufacture_date"];
	$expiry_date = $_GET["expiry_date"];
	$shelf_no = $_GET["shelf_no"];

	$query = "INSERT INTO inventory VALUES('$inventory_id', '$medicine_id', '$quantity', '$manufacture_date', '$expiry_date','$shelf_no')";
	$result = mysqli_query($con, $query);

	printf(mysqli_error());

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_inventory.php");

}

?>
