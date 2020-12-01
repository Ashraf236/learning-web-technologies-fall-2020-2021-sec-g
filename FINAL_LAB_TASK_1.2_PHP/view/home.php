<?php
	include('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>Welcome home,  <?php session_start(); echo $_SESSION['username']; ?></h1>
	<a href="create.php">Register new employer</a> |
	<a href="employerList.php">Employer List</a> |
	<a href="../php/logout.php">logout</a>

</body>
</html>


