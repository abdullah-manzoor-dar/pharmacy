<?php
require_once 'dbconnect.php';

session_start();

$username = $_POST["username"];
$password1 = $_POST["password"];

$password = md5($password1);

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

if($username == 'dar' && $password1 == 'dar')
{
	$_SESSION['username'] = 'admin';
	$url= getAddress();
	$scheme = parse_url($url, PHP_URL_SCHEME);
	$user = parse_url($url, PHP_URL_USER);
	$pass = parse_url($url, PHP_URL_PASS);
	$host = parse_url($url, PHP_URL_HOST);
	$port = parse_url($url, PHP_URL_PORT);
	header("Location: ".$scheme."://".$user.":".$pass."@".$host.":".$port."/customer_home.php");
}
?>
