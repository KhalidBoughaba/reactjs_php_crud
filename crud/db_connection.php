<?php 
$conn = mysqli_connect("localhost", "root", "", "react_php_crud");

if($conn->connect_error){
    die("database not connected");
}