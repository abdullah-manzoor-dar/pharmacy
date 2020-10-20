<?php


/*$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';

$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$conf_password = $_POST["conf_password"];
$address = $_POST["address"];
$phoneno1 = $_POST["phoneno1"];
$phoneno2 = $_POST["phoneno2"];

// $error_css = "";
$query = "SELECT * FROM customer WHERE customer_id='$username'";

$result = mysqli_query($con, $query);
$numResults = mysqli_num_rows($result);
if($conf_password!=$password)
{
	echo "<br><br><br><center><h1>Passwords don't match!</h1></center>";
}
else if($numResults == 1)
{
	echo "<script type='text/javascript'>";
	echo "alert('Username already taken!'); ";
	echo "window.location.href = 'signup.php';";
	echo "</script>";
}
else
{
	$password = md5($password);
	$query = "INSERT INTO customer VALUES ('$username', '$password', '$name', '$address')";
	$query1 = "INSERT INTO c_phone_no VALUES ('$username','$phoneno1')";
	
	mysqli_query($con, $query);
	mysqli_query($con,$query1);
	if(!empty($phoneno2))
	{
		$query2 = "INSERT INTO c_phone_no VALUES ('$username','$phoneno2')";
		mysqli_query($con,$query2);
	}

	echo "<br><br><br><center><h1>Successfully registered $name ! </h1></center>";
	sleep(4);
	header("Location:login.php");
}
?>
