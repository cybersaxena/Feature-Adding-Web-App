<?php
$servername = "localhost";
$username = "root";
$password = "123";
$db = "featureDB";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["tl"]) && isset($_POST["des"]) && isset($_POST["cl"]) && isset($_POST["pr"]) && isset($_POST["tr"]) && isset($_POST["ur"]) && isset($_POST["ar"])){

	$title  = $_POST["tl"];
	$description  = $_POST["des"];
	$client  = $_POST["cl"];
	$priority  = intval($_POST["pr"]);
	$target  = $_POST["tr"];
	$url  = $_POST["ur"];
	$area  = $_POST["ar"];

	$sql = "UPDATE feature SET priority=priority+1 WHERE client='$client' and priority>=$priority";
	if (mysqli_query($conn, $sql)) {
    		;
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$sql = "INSERT INTO feature (title, description, client, priority, target, url, area)
		VALUES ('$title','$description','$client', $priority, STR_TO_DATE('$target','%m-%d-%Y'), '$url', '$area')";

	if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
	} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);

?>