<?php
	session_start();
	require('connectdb.php');

	if ( isset($_POST['username']) and isset($_POST['password']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$query = "SELECT * FROM `log` WHERE username = '$user' and password = '$pass' ";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($result);

		if ($count == 1)
		{
			$_SESSION['username'] = $user;
			header('location: menu.php');
			$sql = "insert into count (username) values ('$user') ";
			mysqli_query($conn, $sql);
		}
		else
		{
			header('location: login.php');
		}
	}
?>