<?php

$user = $_GET["usr"];

session_start();
if($_SESSION[$user] == "true")
	echo "true";
else
	echo "false";

?>
