<?php
    session_start();
    if(isset($_POST['submit']))
    {

        
        
        $id='';
        if(!empty($_POST['id']))
        {
            $id = $_POST['id'];
        }
        else{

            $id='';
        }
        

        $password='';
        if($_POST['password']==$_POST['con_password'])
        {
            $password = $_POST['password'];
        }
        else
        {
            
            $password='';
        }

        $name='';
        if(!empty($_POST['name']))
        {
            $name = $_POST['name'];
        }
        else{

            $name='';
        }


        $usertype ='';
        if(isset($_POST['usertype']))
        {
           $usertype =  $_POST['usertype'];
           
        }
        else
        {
            
            $usertype ='';
        }



        if($id!="" &&  $name!="" && $password!=''&& $usertype!='')
        {
            $_SESSION['name'] = $name;
            $_SESSION['id'] = $id;
            $_SESSION['usertype']= $usertype;
            $_SESSION['password'] = $password;

            header('location: login.php');
        }
        else
        {
            header('location: registration.php?msg=wrong_data');
        }

    }

    else
    {
        header('location: registration.php');
    }



?>