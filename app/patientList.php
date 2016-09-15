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
	    padding: auto;
	    border: 3px solid #f1f1f1;
	    color: white;
	    font-family: myfirst;
	}
	td{
		padding: auto;
		text-align: center;
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
		$sql2 = "SELECT * FROM patient";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row
		    ?>
		<center><table style="border: 3px solid #f1f1f1;">
		<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th><th>Contact</th><th>Field</th><th>Gender</th><th>Date</th><th>Description</th</tr>
			
	<?php		    
		while($row = $result->fetch_assoc()) {

	?>
			<tr><td><?php echo $row["p_id"]."" ?></td><td><?php echo $row["name"]."" ?></td><td><?php echo $row["age"]."" ?></td>
			<td><?php echo $row["email"]."" ?></td><td><?php echo $row["contact"]."" ?></td><td><?php echo $row["field"]."" ?></td>
			<td><?php echo $row["sex"]."" ?></td><td><?php echo $row["dt"]."" ?></td><td><?php echo $row["description"]."" ?></td></tr>
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