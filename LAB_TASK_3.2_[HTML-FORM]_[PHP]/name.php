<?php
    $name ="";

    if(isset($_POST['name']))
    //checking name
    {
    	if(!empty($_POST['name'])&&strlen($_POST['name'])>2)
    	{
    		 $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z][a-zA-Z.-]*$/", $name)){
    		     
                 echo "Error: not a valid name,must be start with letter, no numbers allowed  ";

            }
            else
            {
                echo $name;
            }
    	}
    	
    	else
    	{
            
    		echo "Must enter your name";
    	}

    }
?>




<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" >
		<table>
			<h1>Name</h1>
			<tr>
				<td>
			       <input type="text" name="name" value=""> <br><br>
			       <input type="submit" name="submit" value="Submit">
			    </td>
			</tr>      
		</table>
	</form>
</body>
</html> 



