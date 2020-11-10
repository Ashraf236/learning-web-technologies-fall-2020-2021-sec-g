<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<center>
<form method="post" action="logincheck.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text"><br/>                               
					Password<br/>
					<input type="password">
					<br /><hr/>
					<input type="button" value="Login">
					<a href="registration.html">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>


</body>
</html>

<?php
  if(isset($_GET['msg']))
    {
        if($_GET['msg'] == 'invalid_user')
        {
            echo '<h1>Invalid User<h1>';
        } 
    }
?>
