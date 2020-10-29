<?php

	if(isset($_POST['submit'])){
		$name = $_POST['email'];
		echo $name;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>EMAIL</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend>Email</legend>
			<input type="text" name="email" value="">
			<hr/>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html> 