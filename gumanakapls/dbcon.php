<?php 
$conn = mysqli_connect("localhost:3306","root","","genfinity");

if (!$conn){
    die(mysqli_error($conn));
}

?>