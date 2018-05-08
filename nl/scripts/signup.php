<?php
session_start();
ob_start();

require_once "../../scripts/db_connection.php";

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


    //get user info.
    $get_query = "SELECT * FROM USER WHERE `email` = '{$email}' && `username` = '{$username}' ";
    $get_result = mysqli_query($mysqli, $get_query);
    while ($row=mysqli_fetch_assoc($get_result)){
        $id = $row['id'];
        $_SESSION['new_user'] = $id;
    }
    header("Location: ../register_2.php");
}else{

    header("Location: ../register.php");
}