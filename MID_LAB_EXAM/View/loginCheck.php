<?php

    session_start();
    if(isset($_POST['submit']))
    {

        $logun = $_POST['logun'];
        $logpas = $_POST['logp'];
        $logusertype = $_POST['logut'];
        if(isset($_SESSION['un']) && isset($_SESSION['password']))
        {
            if($logun == $_SESSION['name'] && $logpas== $_SESSION['password'])
            {
                $_SESSION['active'] = 'true';
                header('location: profile.html');
            }
            else
            {
                header('location: login.php?msg=invalid_user');
            }
        }
        else
        {
            header('location: login.php?msg=invalid_user');
        }

    }
    else
    {
       header('location: login.php');
    }

?>