<html>
<head>
	<title>Registeration Slip</title>
</head>
<style>

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
td{
	padding-left: 80px;
}
</style>
<body>
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
		$name = $_POST["tbName"];
		$sex = $_POST["tbSex"];
		$age = $_POST["tbAge"];
		$contact = $_POST["tbMobile"];
		$email = $_POST["tbEmail"];
		$department = $_POST["tbDept"];
		$description = $_POST["tbDescription"];
		$doctor = 10001;		
		//echo "$name";
		$sql = "INSERT INTO patient(name,age,contact,email,field,description,d_id,sex) VALUES('".$name."',".$age.",".$contact.",'".$email."','".$department."','".$description."','".$doctor."','".$sex."')";

		if($conn->query($sql) === TRUE)
		{
			//echo "Patient Successfully taken appointment";
		}
		else echo "ERROR:".$conn->error;
		$sql2 = "SELECT * FROM doctor where dept='".$department."'";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$drname = $row["name"];
		    	$did = $row["d_id"];
		    	$dept = $row["dept"];
		    	$cabin = $row["cabin"];
		    	$drcontact = $row["contact"];
		        /*echo "d_id: " . $row["d_id"]. " Name: " . $row["name"]. " dept : " . $row["dept"]." cabin : " . $row["cabin"]." contact : " . $row["contact"]. "<br>";*/
		    }
		} else {
		    echo "0 results";
		}
		//echo $drname."<br>";
		$conn->close();
		//echo $drname."<br>";
	?> 
	<center>
	<div style="width:700px;height:900px;border:1px SOLID BLACK;background:url(../images/2.jpg)">
		<img src="../images/logo.png" alt="Smiley face" width="100" height="100" align="left" style="padding-top:25px;"> 
		<div style="margin-right:65px;padding-top:30px;">
		<center>
		<h1 >XYZ HOSPITAL</h1>
		<p>address of the hospital</p>
		</center>
		</div>
		<hr>
		<table>
			<tr><th>Patient</th><th>Doctor</th></tr>
			<tr><td><?php echo "Name : ".$name ?></td><td><?php echo "ID : ".$did ?></td></tr>
			<tr><td><?php echo "Gender : ".$sex ?></td><td><?php echo "Name : ".$drname ?></td></tr>
			<tr><td><?php echo "Age : ".$age ?></td><td><?php echo "Department : ".$dept ?></td></tr>
			<tr><td><?php echo "Contact: ".$contact ?></td><td><?php echo "Cabin : ".$cabin ?></td></tr>
			<tr><td><?php echo "Email : ".$email ?></td><td><?php echo "Contact : ".$drcontact ?></td></tr>
			<tr><td><?php echo "Description : ".$description ?></td><td></td></tr>
		</table>
		<hr>
	</div>
	<button style="margin-top:5px; width:80px;background-color:#11f;color:white;" onClick="window.print()">print</button>
	</center>
</body>
</html>