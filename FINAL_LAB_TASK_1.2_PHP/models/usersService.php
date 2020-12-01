<?php
	require_once('db.php');

	function validateUser($user){

		$conn = getConnection();
		$sql = "select * from employer where username='{$user['username']}' and password='{$user['password']}'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if($row > 0){
			return true; 
		}else{
			return false;
		}
	}
	function checkUserType($uname){
		$conn = getConnection();
		$sql = "select usertype from employer where username='$uname'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if($row > 0){
			return $row['usertype']; 
		}else{
			return false;
		}

	}

	function getByIdUser($id){

		$conn = getConnection();
		$sql = "select * from employer where id=$id";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		if(count($row) > 0 ){
			return $row;
		}else{
			return null;
		}
	}

	function getAllUser(){

		$conn = getConnection();
		$sql = "select * from employer";

		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}
	function getUser($uname){

		$conn = getConnection();
		$sql = "select * from employer where username = '$uname'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$users = [];
		array_push($users, $row);

		//while ($row = mysqli_fetch_assoc($result)) {
		//	array_push($users, $row);
		//}

		return $users;
	}


	function insertUser($user){

		$conn = getConnection();
		$sql = "insert into employer values('{$user['employerName']}','{$user['companyName']}', '{$user['contactNo']}','{$user['userName']}', '{$user['password']}', '{$user['userType']}')";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

	function deleteUser($id){

		$conn = getConnection();
		$sql = "delete from employer where id='$id'";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

	function updateUser($user){

		$conn = getConnection();
		$sql = "update employer set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='{$user['type']}'";

		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

	function editUserName($funame,$fid){
	    $conn = getConnection();
		$sql = "update employer set username ='$funame' where id='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}
	function editUserEmail($fuemail,$fid){
		$conn = getConnection();
		$sql = "update employer set email ='$fuemail' where id='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}
	function editUserPassword($fupassword,$fid){
		$conn = getConnection();
		$sql = "update employer set password ='$fupassword' where id='$fid'";
		$status = mysqli_query($conn, $sql);
		
		if($status){
			return true; 
		}else{
			return false;
		}
	}

?>