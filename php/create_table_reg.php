<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="zoion";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully";
$sql="create table reg_details (
NAME varchar(50),
STATE varchar(30),
SPECIAL_REQ varchar(100),
DATE date,
NO_OF_TICKETS int)";
if($conn->query($sql)==TRUE){
	echo "<br>Table employee created successfully.";
}else{
	echo "<br>Error creating table:".$conn->connect_error;
}
$conn->close();
?>