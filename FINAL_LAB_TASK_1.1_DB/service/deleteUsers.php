<?php

   require_once('../db/db.php');
	$conn = getConnection();
	
	function deleteUser($fid){
		global $conn;
		$sql = "delete from users where id='$fid'";
		mysqli_query($conn, $sql);
		header('location: ../view/login.php?msg=user_deleted');
	}

?>
