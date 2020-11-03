<?php
   $email="";

   if(isset($_POST['email'])){
   	  
        if(!empty($_POST['email']))
        {
        	$email = $_POST['email'];
          if(!filter_var($email,FILTER_VALIDATE_EMAIL))
          {
            echo "Invalid email address";
          }
          else{
   	        echo $email;
          }
          }
        
        else
        {
        	echo "Enter your email address. Cannot be empty";
 
        }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method = "POST">
		<table>
			<h1>Email Input</h1>
			 <tr>
			 	<td>
			      <input type="email" name="email" value=""><br><br>
			     <input type="submit" name="submit" value="Submit">
		        </td>
		     </tr>   
		</table>
	</form>

</body>
</html>