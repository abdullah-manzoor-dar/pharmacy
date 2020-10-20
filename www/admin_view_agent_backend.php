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
	$agent_id = $_GET["agent_id"];
	$query = "DELETE FROM delivery_agent WHERE agent_id=$agent_id";
	$result = mysqli_query($con, $query);

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_agents.php");
}
else if($identifier==1)
{

	$agent_id = $_GET["agent_id"];
	$name = $_GET["name"];
	$salary = $_GET["salary"];
	$address = $_GET["address"];

	if($name!='')
	{
		echo 'here';
		$query = "UPDATE delivery_agent SET name='$name' WHERE agent_id='$agent_id'";
		$result = mysqli_query($con, $query);
	}
	if($salary!='')
	{
		$query = "UPDATE delivery_agent SET salary='$salary' WHERE agent_id='$agent_id'";
		$result = mysqli_query($con, $query);
	}
	if($address!='')
	{
		$query = "UPDATE delivery_agent SET address='$address' WHERE agent_id='$agent_id'";
		$result = mysqli_query($con, $query);
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
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_agents.php");

}
else if($identifier==2)
{
	$agent_id = $_GET["agent_id"];
	$name = $_GET["name"];
	$salary = $_GET["salary"];
	$address = $_GET["address"];

	$query = "INSERT INTO delivery_agent VALUES('$agent_id', '$name', '$salary', '$address')";
	$result = mysqli_query($con, $query);

	printf(mysqli_error());

	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/MediKart/admin_view_agents.php");

}

?>
