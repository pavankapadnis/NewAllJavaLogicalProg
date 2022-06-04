<?php
include("connection.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$country =$_POST['country'];
$age = $_POST['age'];
$dates = $_POST['date'];
$empid = $_POST['empid'];

$sql ="INSERT INTO posts(firstname,lastname,gender,country,age,dates,empid) VALUES ('".$fname."','".$lname."','".$gender."','".$country."','".$age."','".$dates."','".$empid."')";

mysqli_query($conn,$sql);


?>