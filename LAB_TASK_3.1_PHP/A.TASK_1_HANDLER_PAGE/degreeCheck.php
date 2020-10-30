<?php
   if(isset($_POST['degree']))
   {     
   	    $degree = $_POST['degree'];  
 
     	foreach ($_POST['degree'] as $key => $value)
     	{
     	    echo "$value<br>";
     	}
    } 
    else
    {
     	echo 'Select at least one degree';
    }
?>