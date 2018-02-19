<?php

require_once 'inc/connection.php';

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$gender = $_GET['dob'];
$email=$_GET['email'];
$tel=$_GET['tel'];


$sql="INSERT INTO customer (fname,lname,gender,email,tel) VALUES('{$fname}','{$lname}','{$gender}','{$email}','{$tel}')";
$result=mysqli_query($con, $sql);
if ($result) {
    header('Location:customerRegister.html');
}


