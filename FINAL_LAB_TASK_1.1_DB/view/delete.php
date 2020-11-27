
<?php
	include('header.php');
	require_once('../db/db.php');
	$uid = $_GET['id'];
	$conn = getConnection();
	$sql = "select * from users where id='$uid'";
	$result = mysqli_query($conn, $sql);
	if(isset($_POST['deleteUser'])){
		require_once('../service/deleteUsers.php');
	    $delete = deleteUser($uid);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>DELETE USER</title>
</head>
<body>

      <?php
      $data = mysqli_fetch_assoc($result);
       echo "USERID :".$data['id']."<br>"."USERNAME :".$data['username']."<br>"."EMAIL :".$data['email']."<br>"."USER TYPE :".$data['type']."<br>";
      ?> 
      <form method="post" action="">
      	<input type="submit" name="deleteUser" value="Confirm Delete">
      </form>
      <a href="userlist.php">BACK</a>      

</body>
</html>