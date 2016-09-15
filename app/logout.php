<?php
	session_start();
	unset($_SESSION['uname']);
	unset($_SESSION['pass']);
	session_destroy();
?>