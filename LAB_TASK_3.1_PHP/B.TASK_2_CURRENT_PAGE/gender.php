<?php
   if(isset($_POST['submit'])){

     $gender = $_POST['gender'];
        echo $gender;
   }
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Gender</title>
</head>
<body>
    <fieldset style="width:200px">
       <legend>Gender</legend>
        <form method="POST">  
            <input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other <br>
            <hr>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>       
</body>
</html>
