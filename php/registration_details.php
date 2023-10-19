<?php
session_start();
if(isset($_POST['submit'])){
$name = $_POST['name'];
$state = $_POST['state'];
$special = $_POST['special'];
$date = $_POST['date'];
$count = $_POST['count'];
$_SESSION['name']=$name;
$_SESSION['state']=$state;
$_SESSION['special']=$special;
$_SESSION['date']=$date;
$_SESSION['count']=$count;
include("insert_reg_details.php");
}
header("Location:../index.html");
exit();
?>