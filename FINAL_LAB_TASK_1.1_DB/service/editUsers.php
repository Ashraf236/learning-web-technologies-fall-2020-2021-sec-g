<?php

   require_once('../db/db.php');
	$conn = getConnection();
	
	function editUserName($funame,$fid){
		global $conn;
		$sql = "update users set username ='$funame' where id='$fid'";
		mysqli_query($conn,$sql);
	}
	function editUserEmail($fuemail,$fid){
		global $conn;
		$sql = "update users set email ='$fuemail' where id='$fid'";
		mysqli_query($conn,$sql);
	}
	function editUserPassword($fupassword,$fid){
		global $conn;
		$sql = "update users set password ='$fupassword' where id='$fid'";
		mysqli_query($conn,$sql);
	}

?>
