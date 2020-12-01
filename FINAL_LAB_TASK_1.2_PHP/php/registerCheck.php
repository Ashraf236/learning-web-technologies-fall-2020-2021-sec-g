<?php
    require_once('../models/usersService.php');

    if(isset($_POST['submit'])){

        
        $employerName  = $_POST['employerName'];
        $companyName  = $_POST['companyName'];
        $contactNo   = $_POST['contactNo'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $userType = $_POST['userType'];

        $register = ['employerName'=> $employerName, 'companyName'=> $companyName, 'contactNo'=>$contactNo, 'userName'=> $userName, 'password'=>$password, 'userType'=> $userType];

        $status = insertUser($register);
        if($status){
            header('location: ../view/home.php');
        }
        else{
            echo "registration not complete";
        }
}
?>