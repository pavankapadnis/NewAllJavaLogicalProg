<?php
include("connection.php");

$id = $_POST['postid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$country =$_POST['country'];
$age = $_POST['age'];
$dates = $_POST['date'];
$empid = $_POST['empid'];


//echo $id;

$sql ="UPDATE posts SET firstname='".$fname."',lastname='".$lname."',gender='".$gender."',country='".$country."',age='".$age."',dates='".$dates."',empid='".$empid."' where id='".$id."'";

mysqli_query($conn,$sql);



?>