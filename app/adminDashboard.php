<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="form.css"></link>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link type="text/javascript" href="captcha.js">
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
</head>
<style type="text/css">
	@font-face {
	font-family: myfirst;
	src: url(Dosis-Regular.ttf);
	}
	@font-face {
		font-family: myfirst1;
		src: url(Cabin-Regular.ttf);
	}
	.adminbutton{
		 border: 3px solid #f1f1f1;
		 width: 200px;
		 height: 50px;
		 background-color: #8e44ad;
		 color: white;
		 text-align: center;
		 text-decoration: none;
		 font-family: myfirst1;
	}
	.btn{
		margin-top: 30px;
		float: left;
	}
	form {
    border: 3px solid #f1f1f1;
    width: 500px;
    height: 500px;
    margin-top: 50px;
    float: center;
	}

	input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	}

	button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	}

	.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
	}

	img.avatar {
    width: 40%;
    border-radius: 50%;
	}

	.container {
    padding: 16px;
	}
	.textcolor{
	font-family: myfirst1;
	color: white;
	}
	span.psw {
    float: right;
    padding-top: 16px;
	}

	@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
	}
</style>
<body onload="CaptchaChange()">
	<?php
		session_start();
		if(isset($_SESSION['uname'])&&isset($_SESSION['pass']))
		{

	?>
	<div class="head">
		<ul>
			<li><a class="icon" href="hospital.html">HOSPITAL APPOINTMENT SYSTEM</a></li> 
			<li><a class="SearchDoctor" href="SearchDoctor.html">Search Doctor</a></li>
			<li><a class="TakeAppointment" href="takeAppointment.html">Take Appointment</a></li>
			<li style="float:right; margin-right:15px; padding-top:5px;" ><img src="../images/medicallogo.png" height="60px" width="70px"></li>
		</ul>
	</div>
	<div class="btn">
		<div class="adminbutton" ><a href="adminDashboard.html" ><p style="color:white">ADD DOCTOR</p></a></div> 
		<div class="adminbutton"><a href="doctorList.php"><p style="color:white">List of Doctors</p></a></div>
		<div class="adminbutton" ><a href="patientList.php"><p style="color:white">List of Patient</p></a></div>
		<div class="adminbutton"><a  href="adminPanel.html"><p style="color:white">Logout</p></a></div>
	</div>
	<div style="margin-left:30%;">
	<form action="addDr.php" method="POST">
	  <div class="container"> 
	    <label class="textcolor"><b>ID</b></label>
	    <input type="text" placeholder="Enter ID" name="id" required style="margin-bottom: 7px;margin-top: 7px;">
		<label class="textcolor"><b>Name</b></label>
	    <input type="text" placeholder="Enter Name" name="drname" required style="margin-bottom: 7px;margin-top: 7px;">
	    <label class="textcolor"><b>Department</b></label>
	    <input type="text" placeholder="Enter Department" name="drdept" required style="margin-bottom: 7px;margin-top: 7px;">
	    <label class="textcolor"><b>Contact</b></label><br>
	    <input type="number" placeholder="Enter contact" name="drcontact" required style="margin-bottom: 7px;margin-top: 7px;"><br> 
	    <label class="textcolor"><b>Cabin</b></label>
	    <input type="text" placeholder="Enter Cabin" name="drcabin" required style="margin-bottom: 5px;margin-top: 10px;">               
	    <button type="submit" style="margin-bottom: 5px;margin-top: 30px;">ADD</button>
	  </div>
	</form>
	</div>
	<?php
		}
		else
			echo "You are trying to open it without admin permission !! :) ";
		unset($_SESSION['uname']);
		unset($_SESSION['pass']);
		session_destroy();
	?>
</body>
</html>