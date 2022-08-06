<?php 

include('connection.php');

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$query = "insert into users (Name , Email , Password) values('$Name','$Email','$Password')";
if(mysqli_query($con,$query)){
    header('location:login.php');
}else{
    echo 'errror';
}







?>