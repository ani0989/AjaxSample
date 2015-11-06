<?php

$db_user = "YOUR_DB_USER";
$db_password = "YOUR_DB_PASSWORD";
$db_name = "YOUR_DB_NAME";
$db_host = "YOUR_DB_HOST";

//connecting to mysql database
$con = new mysqli($db_host, $db_user, $db_password, $db_name);

//prints error message if connection is not successful
if ($con -> connect_error > 0) {
	 die('Unable to connect to database [' . $con -> connect_error . ']');
}

//Gets username value from the URL
$uname = $_GET['uname'];

//Checks if the username is available or not
$query = "SELECT username FROM members WHERE username = '$uname'";

$result = mysqli_query($con, $query);

//Prints the result
if (mysqli_num_rows($result)<1) {
	echo "<span class='green'>Available</span>";
}
else{
	echo "<span class='red'>Not available</span>";
}
?>
