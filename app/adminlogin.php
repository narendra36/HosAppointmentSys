<?php
	session_start();
	$username = $_POST["uname"];
	$password = $_POST["psw"];
	//echo $username." : ".$password;
	$_SESSION['uname']=$username;
	$_SESSION['pass'] = $password;
	if($username=="admin123")
	{
		if($password=="adminlogin")
		{
			echo "login succesful";
			header("Location: /app/adminDashboard.php");
		}
		else
			echo "Username or Passwrod is wrong !";
	}
?>
