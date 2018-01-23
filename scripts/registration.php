<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 22-1-2018
 * Time: 22:03
 */

require_once "db_connection.php";

// REGISTER USER
if (isset($_POST['submit'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $firstname = mysqli_real_escape_string($mysqli, $_POST['first_name']);
    $lastname = mysqli_real_escape_string($mysqli, $_POST['last_name']);
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $repeat_password = mysqli_real_escape_string($mysqli, $_POST['repeat_password']);
    $tel_number = mysqli_real_escape_string($mysqli, $_POST['tel_number']);



    // form validation: ensure that the form is correctly filled
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if ($password != $repeat_password) {
        array_push($errors, "The two passwords do not match");
    }
    $match= "SELECT * From USER WHERE email = '{$email}' ";
    $getAgent = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($getAgent) == 1)  { array_push($errors, "This email is already exists"); }



    // register user if there are0 no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
        $query = "INSERT INTO USER (first_name,last_name,username,email,password,Phone_number) 
  		
  			  VALUES('$firstname', '$lastname', '$username','$email','$password','$tel_number')";
        mysqli_query($mysqli, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');
    }

}
