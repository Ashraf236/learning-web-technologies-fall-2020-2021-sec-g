<?php
   if(isset($_POST['submit'])){
      $name = $_POST['dob'];
      echo "yy-mm-dd"."<br>";
      echo $name;
   }
?>

<!DOCTYPE html>
<html>
<head>
        <title>Date of Birth</title>
</head>
<body>
    
    <fieldset style="width:200px">
            
        <legend><b>Date of Birth</b></legend>
        <pre>mm/   dd   /   yyyy</pre>
        <form method="POST">

            <input type="date" data-date-format="DD/MM/YYYY" name="dob" value="" =""> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
        </form>          
    </fieldset>
    
</body>
</html>