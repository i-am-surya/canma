<?php
session_start();
if (isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title> Canmation </title>
	<meta charset="utf-8">
	<meta name="viewport"content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<h1>Login successful!</h1>
	<b><div style="font-size: 20px;">
	<h2 style="color:black;">Hello <?= "{$_SESSION['username']}" ?></b></h2></div>
</body>
</html>
<?php
}
else
{
	header('location:login.php');
}
?>