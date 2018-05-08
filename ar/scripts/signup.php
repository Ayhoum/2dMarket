<?php
session_start();
ob_start();

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
    $phone         = $_POST['phone'];
    $phone = mysqli_real_escape_string($mysqli,$phone);
    $password         = $_POST['password'];
    $option=["COST"=> 12];
    $hash_pass = password_hash($password,PASSWORD_DEFAULT,$option);


    date_default_timezone_set('Europe/Amsterdam');
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO USER (first_name, last_name, username, register_date, phone_number, email, password) 
      VALUES (
      '{$fname}',
      '{$lname}',
      '{$username}',
      '{$date}',
      '{$phone}',
      '{$email}',
      '{$hash_pass}')";

    $run = mysqli_query($mysqli, $query);


    //get user info.
    $get_query = "SELECT * FROM USER WHERE `email` = '{$email}' && `username` = '{$username}' ";
    $get_result = mysqli_query($mysqli, $get_query);
    while ($row=mysqli_fetch_assoc($get_result)){
        $id = $row['id'];

    }
    header("Location: ../register_2.php?id=$id");
}else{

    header("Location: ../register.php");
}