





<!DOCTYPE html>
<html>
<head>
	<title> LOGIN</title>
</head>
<body>
	<table border="1" width="100%">

		<tr height="50px">
			<td width="100px">
				<img src="logo.png" width="400px" height="200px">
			</td>
	             
             <td colspan="2" align="right"> 
	             <a href="A_Public_Home.php">Home</a>
	             <a href="C_Login.php">Login</a>
	             <a href="B_Registration.php">Registration</a>
             </td>
         </tr>
         <tr height="100px">
         	<td colspan="2" align="center">
         		 <form method="post" action="loginCheck.php">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" ></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
         	</td>
         </tr>
         <tr>
         	<td colspan="2" align="center">
         		 <p>Copyright@2017</p>
         	</td>
         </tr>     
    </table>
</body>
</html>
