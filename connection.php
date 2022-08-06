<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "library";

$con = mysqli_connect($host,$user,$password,$db);
if(!$con == true){
    echo 'connect';
}

?>