<?php
	include('header.php');
	require_once('../models/usersService.php');
	    session_start();
	      $employer = getUser($_SESSION['username']);

	      if(checkUserType($_SESSION['username'])=='admin'){
	      	$employerlist = getAllUser();
	      }
	      else{
	      	$employerlist = $employer;
	      }
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Employer List</title>
</head>
<body>
	
		<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Employer list</h3>
	<table border="1"> 
		<tr>
			<td>Employer Name</td>
			<td>Company Name</td>
			<td>Contact No</td>
			<td>User Name</td>
			<td>Password</td>
			<td>User Type</td>
			<td>ACTION</td>
		</tr>

	<?php for($i=0; $i< count($employerlist); $i++){ ?>

			<tr>
				<td><?=$employerlist[$i]['employername']?></td>
				<td><?=$employerlist[$i]['companyname']?></td>
				<td><?=$employerlist[$i]['contactno']?></td>
				<td><?=$employerlist[$i]['username']?></td>
				<td><?=$employerlist[$i]['password']?></td>
				<td><?=$employerlist[$i]['usertype']?></td>
				<td>
					<a href="edit.php?id=<?=$employerlist[$i]['username']?>">EDIT</a> | 
					<a href="delete.php?id=<?=$employerlist[$i]['username']?>">DELETE</a>
				</td>
			</tr>
	<?php } ?>

	</table>


</body>
</html>


