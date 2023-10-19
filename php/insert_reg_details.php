<?php
session_start();
include("connect.php");
$name = $_SESSION['name'];
$state = $_SESSION['state'];
$special = $_SESSION['special'];
$date = $_SESSION['date'];
$count = $_SESSION['count'];
$sql="insert into reg_details (NAME,STATE,SPECIAL_REQ,DATE,NO_OF_TICKETS)
values ('$name','$state','$special','$date','$count');";
if($conn->query($sql)==TRUE){
	echo "<br>New record inserted successfully.";
}else{
	echo "<br>Error in insertion:".$conn->connect_error;
}
$conn->close();
?>