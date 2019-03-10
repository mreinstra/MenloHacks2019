<!doctype html>

<?php
$action = $_GET["action"];
$firstName = $_POST["firstname"];
$phoneNum = $_POST["phonenumber"];

if($action = "save") {
  file_put_contents("form_test.txt", [$firstName, $phoneNum]);
}
?>


<html lang="en">
<head>
  <meta charset="utf-8">

  <title>A</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="growth.css">

</head>

<body>
	<form action="?action=save" method="post">
  		<br>First name:<br>
  		<input type="text" name="firstname"><br>
  		<br>Phone number:<br>
  		<input type="text" name="phonenumber"><br>
  		<br><input type="submit" value="Submit">
	</form>
  <script src="kewl.js"></script>
</body>
</html>