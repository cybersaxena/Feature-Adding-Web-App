<!DOCTYPE html>
<html>
<head>
<style>
#show_table {
    width: 100%;
    border-collapse: collapse;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}

#show_table td,#show_table th {
    border: 1px solid  #ddd;
    padding: 5px;
}

#show_table th {text-align: left;}
#show_table tr:hover {background-color: #f5f5f5}
</style>
</head>
<body>

<?php

$q = $_GET["select_client"];

$servername = "localhost";
$username = "root";
$password = "123";
$db = "featureDB";
$sql = "";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($q == '*')
	$sql = "SELECT title, description, client, priority, target, url, area FROM feature ORDER BY client, priority";	
else
	$sql = "SELECT title, description, priority, target, url, area FROM feature WHERE client='$q' ORDER BY priority";
$result = mysqli_query($conn,$sql);

if ($q == '*'){
	echo "<table id=\"show_table\">
	<tr>
	<th>Title</th>
	<th>Description</th>
	<th>Client</th>
	<th>Priority</th>
	<th>Target</th>
	<th>URL</th>
	<th>Area</th>
	</tr>";

	while($row = mysqli_fetch_array($result)) {
    	echo "<tr>";
    	echo "<td>" . $row['title'] . "</td>";
    	echo "<td>" . $row['description'] . "</td>";
	echo "<td>" . $row['client'] . "</td>";
    	echo "<td>" . $row['priority'] . "</td>";
    	echo "<td>" . $row['target'] . "</td>";
    	echo "<td><a href=\"" . $row['url'] . "\">".$row['url']."</a></td>";
    	echo "<td>" . $row['area'] . "</td>";
    	echo "</tr>";
	}
	echo "</table>";
}
else{
	echo "<table id=\"show_table\">
	<tr>
	<th>Title</th>
	<th>Description</th>
	<th>Priority</th>
	<th>Target Date</th>
	<th>URL</th>
	<th>Area</th>
	</tr>";

	while($row = mysqli_fetch_array($result)) {
    	echo "<tr>";
    	echo "<td>" . $row['title'] . "</td>";
    	echo "<td>" . $row['description'] . "</td>";
    	echo "<td>" . $row['priority'] . "</td>";
    	echo "<td>" . $row['target'] . "</td>";
    	echo "<td>" . $row['url'] . "</td>";
    	echo "<td>" . $row['area'] . "</td>";
    	echo "</tr>";
	}
	echo "</table>";
}
mysqli_close($conn);

?>

</body>
</html>