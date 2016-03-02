<?php

$user = $_GET["usr"];
$passwrd = $_GET["pass"];

$servername = "localhost";
$username = "root";
$password = "123";
$db = "featureDB";
$sql = "select password from users where username='$user'";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 1) {
	$row = mysqli_fetch_array($result);
		if($row['password'] == $passwrd){
    			session_start();
			$_SESSION[$user] = "true";
			echo "true";
		}
		else{
			echo "Username and password does not match. Try again.";
		}
}
else
	echo "Username and password does not match. Try again.";	
mysqli_close($conn);

?>
