<?php
	$username = $_POST["uname"];
	$password = $_POST["psw"];
	//echo $username." : ".$password;
	if($username=="admin123")
	{
		if($password=="adminlogin")
		{
			echo "login succesful";
			header("Location: /app/adminDashboard.html");
		}
		else
			echo "Username or Passwrod is wrong !";
	}
?>
