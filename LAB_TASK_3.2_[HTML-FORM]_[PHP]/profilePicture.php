<?php

      
if(isset($_POST['submit']))
	{  if(!empty($_FILES['uploadImage']) && !is_null($_POST['userId']))
       {
		       

		           move_uploaded_file($_FILES["uploadImage"]["tmp_name"],   
                           "uploads/".$_FILES["uploadImage"]["name"]); 
                            


                    echo "Your file was uploaded successfully."; 
	     }
	     else
	     {
	     	echo"must choose image and enter user Id";
	     }
    }  
?>












<!DOCTYPE html>
<html>
<head>
    
    <title>Profile Picture</title>
</head>
<body>
    <fieldset style="width:500px">
       <legend><b>Profile Picture</b></legend>
        <form method="POST" enctype="multipart/form-data">  
          <b>User Id  <b><input type="number" name="userId"><br><br>
		 <b>Picture   <b><input type="file" name="uploadImage">
			<hr>
          <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>       
</body>
</html>
