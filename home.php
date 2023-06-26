<!DOCTYPE html>
<html>
<head><title>
</title>
</head>
<body>

<?php
$usernamef = "prasad";
$passwordg = 12;
$username = $_POST['username'];
$password = $_POST['password'];

if($username == $usernamef)
{   
	echo "username matched";
	 
	header( "Refresh:5; url=https://www.google.com", true, 303);
}
else{
	echo "Username does not match";
}
exit;


?>
<body>
<html>