<?php
include 'connection.php';

$email = $_POST['Email'];
$password = $_POST['Password'];

$sql = "SELECT Email , Password FROM users WHERE Email = '".$email."' AND Password = '".$password."' limit 1";
$result = $con->query($sql);
if($result->num_rows == 1){
    header('location:index.php');
}else{
    echo 'Login Faild!';
}

?>