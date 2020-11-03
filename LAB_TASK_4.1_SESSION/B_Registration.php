<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<table border="1" width="1200px" align="center">

		<tr height="50px">
			<td  width="100px">
				<img src="logo.png" width="400px" height="200px">
			</td>
	             
             <td colspan="2"   align="right"> 
	             <a href="A_Public_Home.php">Home |</a>
	             <a href="C_Login.php">Login |</a>
	             <a href="B_Registration.php">Registration |</a>
             </td>
         </tr>
         <tr height="1000px" align="center">
         	<th width="500px" colspan="2" align="center">
                   <fieldset style="width: 500px"> 
                    <legend>REGISTRATION</legend>
                      <form method="post" action="loginCheck.php">
                         
                             <table>
                                 <tr >
                                    <td>Name</td>
                                    <td>
                                        <input type="text" name="name" ></td>
                                 </tr>
                                 <tr>  
                                     <td>Email  </td>
                                     <td><input type="email" name="email"></td> 
                                 </tr>
                                 <tr>
                                     <td>Username</td>
                                     <td><input type="text" name="username" ></td>
                                 </tr>
                                 <tr>
                                     <td>Password</td>
                                     <td><input type="password" name="password"></td>
                                 </tr>
                                 <tr>  
                                     <td> Confirm Password</td>
                                     <td><input type="password" name="con_pass"></td>
                                 </tr>
                                 <tr >
                                     <td>
                                        <fieldset style="width: 250px">
                                          <legend>Gender</legend>  
                                             <input type="radio" name="gender" value="Male"> Male
                                             <input type="radio" name="gender" value="Female"> Female
                                             <input type="radio" name="gender" value="Other"> Other
                                        </fieldset>  
                                     </td>          
                                 </tr>
                                 <tr>
                                     <td>
                                         <fieldset style="width:200px">
                                             <legend><b>Date of Birth</b></legend>
                                             <pre>mm/   dd   /   yyyy</pre>
                                             <input type="date" name="dob" value="">
                                         </fieldset>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td>
                                    <hr>
                                     <input type="submit" name="submit"value="Submit">
                                     <input type="reset" name="reset"value="Reset">
                                     <td>
                                 </tr>   
                             </table>                     
                       </form>
                   </fieldset>
         	</th>
         </tr>
        <tr>
         	<td colspan="2" align="center">
         	<p>Copyright@2017</p>
         	</td>
        </tr>     
    </table>
</body>
</html>
