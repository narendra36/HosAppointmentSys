<html>
<head>
	<title>Doctor List</title>
	<link rel="stylesheet" type="text/css" href="form.css"></link>
	<link rel="stylesheet" type="text/css" href="design.css">	
</head>
<style>
	@font-face {
	font-family: myfirst;
	src: url(Dosis-Regular.ttf);
	}
	@font-face {
		font-family: myfirst1;
		src: url(Cabin-Regular.ttf);
	}
	table {
	    border-collapse: collapse;
	    width: 100%;
	    margin-top: 100px;
	    background-color: #0080FF;
	}

	th {
	    height: 50px;
	    border: 3px solid #f1f1f1;
	    color: white;
	    font-family: myfirst;
	}
	td{
		padding-left: 80px;
		color: white;
		border: 3px solid #f1f1f1;
		font-family: myfirst1;
	}
</style>
<body>
	<div class="head">
		<ul>
			<li><a class="icon" href="hospital.html">HOSPITAL APPOINTMENT SYSTEM</a></li> 
			<li><a class="SearchDoctor" href="SearchDoctor.html">Search Doctor</a></li>
			<li><a class="TakeAppointment" href="takeAppointment.html">Take Appointment</a></li>
			<li><a class="TakeAppointment" href="adminDashboard.html">Admin Panel</a></li>
			<li style="float:right; margin-right:15px; padding-top:5px;" ><img src="../images/medicallogo.png" height="60px" width="70px"></li>
		</ul>
	</div>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "HosAppointmentSys";
		$conn = new mysqli($servername, $username, $password, $dbname);
		//echo "Mukesh";
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$sql2 = "SELECT * FROM doctor";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row
		    ?>
		<center><table style="border: 3px solid #f1f1f1;">
			<tr><th>ID</th><th>Name</th><th>Departmnet</th><th>Cabin</th><th>Contact</th></th>
	<?php		    
		while($row = $result->fetch_assoc()) {

	?>
			<tr><td><?php echo $row["d_id"]."" ?></td><td><?php echo $row["name"]."" ?></td><td><?php echo $row["dept"]."" ?></td>
			<td><?php echo $row["cabin"]."" ?></td><td><?php echo $row["contact"]."" ?></td></tr>
	<?php		        
		}
	?>
		</table></center>    
	<?php
		} else {
		    echo "0 results";
		}
		//echo $drname."<br>";
		$conn->close();
		//echo $drname."<br>";
	?> 
</body>
</html>