<?php
if(isset($_POST['submit'])){

    $email            = $_POST['email'];
    $fname            = $_POST['fname'];
    $lname            = $_POST['lname'];
    $username         = $_POST['username'];
    $password         = $_POST['password'];
    $name = $fname . " " . $lname;

    $query = "INSERT INTO USER (first_name, last_name, username, email, password) 
      VALUES (
      '{$fname}',
      '{$lname}',
      '{$username}',
      '{$email}',
      '{$password}')";
header("Location: ../login.php");
}else{
    header("Location: ../index.php");
}