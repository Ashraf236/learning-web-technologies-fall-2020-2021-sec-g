<?php
	include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>Welcome home, <?php session_start(); echo $_SESSION['username']; ?></h1>
	<a href="create.php">Create New User</a> |
	<a href="profile.php">Profile</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>

</body>
</html>