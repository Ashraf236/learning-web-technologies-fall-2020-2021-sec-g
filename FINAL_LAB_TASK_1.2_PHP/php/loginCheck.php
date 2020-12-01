<?php
	require_once('../models/usersService.php');

	if(isset($_POST['submit'])){

		//declaration
		$uname 	= $_POST['username'];
		$pass 	= $_POST['password'];

		//validation
		if($uname == ""){
			header('location: ../view/login.php?msg=null_username');
		}else if(empty($pass)){
			header('location: ../view/login.php?msg=null_password');
		}else{

			$user = ['username'=> $uname, 'password'=>$pass];
			$status = validateUser($user);
			if($status){
				setcookie('isValid', 'true', time()+3600, '/');
				$userType = checkUserType($uname);
				if($userType=='admin'){
					session_start();
					$_SESSION['username'] = $uname; 
				    header('location: ../view/home.php');
			    }
			    else if($userType=='user'){
			    	session_start();
			    	$_SESSION['username'] = $uname;
			    	header('location: ../view/userHome.php');
			    }

			}else{
				header('location: ../view/login.php?msg=invalid_user');
			}
		}
	}else{
		header('location: login.php');
	}
?>