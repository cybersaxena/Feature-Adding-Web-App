<?php

$user = $_GET["usr"];

session_start();
unset($_SESSION[$user]); 
session_destroy();

?>
