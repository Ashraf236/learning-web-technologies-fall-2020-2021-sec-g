<?php

	if(isset($_POST['submit'])){
		$name = $_POST['email'];
		echo $name;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" value="<?php
				if(isset($_POST['submit'])){
					$name = $_POST['email'];
					echo $name;
				}?>">
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html> 