<?php

$q = $_GET["client_val"];

$servername = "mysql.phpwebapp.svc";
$username = "root";
$password = "123";
$db = "featureDB";
$result = 1;

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT MAX(priority) AS MAX_PR FROM feature WHERE client='$q'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
	echo $row['MAX_PR'];
}
mysqli_close($conn);

?>
