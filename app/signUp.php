<?php
$server = "localhost";
$user = "root";
$password = "jalaz";
$database = "HosAppointmentSys";


$connect = new mysqli($server,$user,$password,$database);

if($connect->connect_error)
	die("Connection Failed".$connect->connect_error);

$name = $_POST["tbName"];
$sex = $_POST["tbSex"];
$age = $_POST["tbAge"];
$contact = $_POST["tbMobile"];
$email = $_POST["tbEmail"];
$department = $_POST["tbDept"];
$description = $_POST["tbDescription"];
$doctor = 10001;


$sql = "INSERT INTO patient(name,age,contact,email,field,description,d_id,sex) 
VALUES('".$name."',".$age.",".$contact.",'".$email."','".$department."','".$description."','".$doctor."','".$sex."')";

if($connect->query($sql) === TRUE)
{
	echo "Patient Successfully taken appointment";
}
else echo "ERROR:".$connect->error;

$connect->close();


?>