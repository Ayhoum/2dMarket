<?php

require_once "../../scripts/db_connection.php";

if(isset($_POST['submit'])){

    $email            = $_POST['email'];
    $email = mysqli_real_escape_string($mysqli,$email);
    $fname            = $_POST['fname'];
    $fname = mysqli_real_escape_string($mysqli,$fname);
    $lname            = $_POST['lname'];
    $lname = mysqli_real_escape_string($mysqli,$lname);
    $username         = $_POST['username'];
    $username = mysqli_real_escape_string($mysqli,$username);
    $password         = $_POST['password'];
    $option=["COST"=> 12];
    $hash_pass = password_hash($password,PASSWORD_DEFAULT,$option);


    $query = "INSERT INTO USER (first_name, last_name, username, email, password) 
      VALUES (
      '{$fname}',
      '{$lname}',
      '{$username}',
      '{$email}',
      '{$hash_pass}')";

    $run = mysqli_query($mysqli, $query);
header("Location: ../login.php");
}else{
    header("Location: ../index.php");
}