<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="page_style.css">

<script>
$(function() {
    $( "#datepicker" ).datepicker();
});
</script>
</head>

<body>

<?php

$titleErr = $descriptionErr = $clientErr = $priorityErr = $targetErr = $areaErr = "";
$title = $description = $client = $priority = $target = $url = $area = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["title"])) {
      $titleErr = "Feature title is required";
   } 

   if (empty($_POST["description"])) {
      $descriptionErr = "Feature description is required";
   }

   if (empty($_POST["client"])) {
      $clientErr = "Client is required";
   } 

   if (empty($_POST["priority"])) {
      $priorityErr = "Feature priority is required";
   }

   if (empty($_POST["target"])) {
      $targetErr = "Target date is required";
   }

   if (empty($_POST["url"])) {
      $url = "";
   } 

   if (empty($_POST["area"])) {
      $areaErr = "Product area is required";
   }

   $client = $_POST["client"];
   $area = $_POST["area"];
}

?>

<div id="header">
<h1>Web App Solutions</h1>
</div>

<div id="nav">
<a href="addFeature.php">Add New Feature</a>
<br>
<a href="showFeature.php">Show Featues</a>
</div>

<div id="section">
<h2 align="center">Add New Feature</h2>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<table name="featureTable" cellspacing="5" cellpadding="5">

<tr><td align="left">Title </td><td><input type="text" name="title" value="<?php echo $title;?>">
      <span class="error">* <?php echo $titleErr;?></span>
</td></tr>

<tr><td align="left">Description </td><td><textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
             <span class="error">* <?php echo $descriptionErr;?></span>
</td></tr>

<tr><td align="left">Client </td><td><select name="client" value="<?php echo $client;?>">
		<option value="">Select...</option>
  		<option value="Client A">Client A</option>
  		<option value="Client B">Client B</option>
  		<option value="Client C">Client c</option>
	</select>
	<span class="error">* <?php echo $clientErr;?></span>
</td></tr>

<tr><td align="left">Priority </td><td><input type="text" name="priority" value="<?php echo $priority;?>">
         <span class="error">* <?php echo $priorityErr;?></span>
</td></tr>

<tr><td align="left">Target Date </td><td><input type="text" name="target" id="datepicker">
	    <span class="error">* <?php echo $targetErr;?></span>
</td></tr>

<tr><td align="left">URL </td><td><input type="text" name="url" value="<?php echo $url;?>">
</td></tr>

<tr><td align="left">Product Area </td><td><select name="area" value="<?php echo $area;?>">
		<option value="">Select...</option>
  		<option value="Policies">Policies</option>
  		<option value="Billing">Billing</option>
  		<option value="Claims">Claims</option>
		<option value="Reports">Reports</option>
	</select>
	<span class="error">* <?php echo $areaErr;?></span>
</td></tr>
</table>
<table name="submitButton" align="center">
<tr><td><input type="submit" name="submit" value="Submit"> </td>
</table>
<br>
<div id="footer">
Copyright © webapp.com
</div>

</body>
</html>
