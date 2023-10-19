<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully";
$sql = "create database zoion";
if($conn->query($sql)==TRUE){
	echo "<br>Database created successfully.";
}else{
	echo "<br>Error creating database:".$conn->connect_error;
}
$conn->close();
?>