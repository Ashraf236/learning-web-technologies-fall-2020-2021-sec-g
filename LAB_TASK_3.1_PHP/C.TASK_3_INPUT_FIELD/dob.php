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

            <input type="date" name="dob" value="<?php
                  if(isset($_POST['submit'])){
                  $name = $_POST['dob'];
                  echo "yy-mm-dd"."<br>";
                  echo $name;
                  }
                  ?>"> <br>
            <hr>
            <input type="submit" name="submit" id="" value="Submit">
        </form>          
    </fieldset>
    
</body>
</html>