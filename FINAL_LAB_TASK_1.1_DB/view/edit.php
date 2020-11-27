<?php
	include('header.php');
	require_once('../db/db.php');
	require('../service/editUsers.php');
	
	$uid = $_GET['id'];
	$conn = getConnection();
	$sql = "select * from users where id='$uid'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result); 

	if(isset($_POST['changeName'])){
		if(empty($_POST['userName'])){
			echo "empty";
		}
		else{
		$uname = $_POST['userName'];
		$ch=editUserName($uname,$uid);
		echo "Name changed";
	   }
	}
	if(isset($_POST['changeEmail'])){
		if(empty($_POST['email'])){
			echo "empty";
		}
		else{
		$uemail = $_POST['email'];
		$ch=editUserEmail($uemail,$uid);
		echo "Email changed";
	   }
	}
	if(isset($_POST['changePassword'])){
		if(empty($_POST['newPassword']&&$_POST['rePassword'] )){
			echo "empty";
		}
		else if(!($_POST['newPassword']==$_POST['rePassword'] )){
			echo "not matched";
		}
		else{
		$upass = $_POST['newPassword'];
		$ch=editUserPassword($upass,$uid);
		echo "Password changed";
	   }
	}

	  
?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>
</head>
<body>
	 <center>
	 	<h1>EDIT PROFILE INFORMATION</h1>
	 	<table>
	 		<tr>
	 			<td>
	 				<form method="post" action="">
	 					Username :  <?php echo $data['username']; ?>
	 					<input type="name" name="userName">
	 					<input type="submit" name="changeName" value="change">
	 				</form>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>
	 				<form method="post" action="">
	 					Email :  <?php echo $data['email']; ?>
	 					<input type="email" name="email">
	 					<input type="submit" name="changeEmail" value="change">
	 				</form>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>
	 				<form method="post" action="">
	 					Password :<br> 
	 					New Password :<input type="password" name="newPassword"><br><br>
	 					Retype Password :<input type="password" name="rePassword">
	 					<input type="submit" name="changePassword" value="change">
	 				</form>
	 			</td>
	 		</tr>
	 	</table>
	 </center>
	 <a href="../php/logout.php">logout</a>
</body>
</html>
