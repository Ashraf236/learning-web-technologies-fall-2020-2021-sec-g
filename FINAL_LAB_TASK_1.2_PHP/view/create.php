<!DOCTYPE html>
<html>
<head>
	<title>Create New Employer</title>
</head>
<body>
	<h1>Register New Employer</h1>
        <form method="post" action="../php/registerCheck.php">
            <table>
            <tr>    
                    <td>Employer Name</td>
                    <td><input type="text" name="employerName" required></td>
                    
                </tr>
                <tr>    
                    <td>Company Name</td>
                    <td><input type="text" name="companyName" required></td>
                    
                </tr>
                <tr>    
                    <td>Contact No</td>
                    <td><input type="text" name="contactNo" required></td>
                    
                </tr>
              
                <tr>    
                    <td>User Name</td>
                    <td><input type="text" name="userName" required></td>
                    
                </tr>
                <tr>    
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                    
                </tr>
                <tr>    
                    <td>User Type</td>
                    <td><input type="text" name="userType" required></td>
                    
                </tr>
                </table>
               
                <tr>   
                    <td><input type="submit" name="submit" value="Register"></td>
                    
                </tr>
            
        </form>
</body>
</html>