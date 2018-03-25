<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 16/2/2018
 * Time: 7:59 م
 */
session_start();
include '../../scripts/db_connection.php';
//check if logging in is called
if (isset($_GET['email']) && isset($_GET['pass'])) {
    $email = mysqli_real_escape_string($mysqli, $_GET['email']);
    $password = mysqli_real_escape_string($mysqli, $_GET['pass']);

    //Check the combination
    $query = "SELECT * FROM USER WHERE email='$email'";
    $results = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($results) == 1) {
        while ($row = mysqli_fetch_assoc($results)) {
            $hash = $row['password'];
            if ((password_verify($password, $hash))){
                $username                   = $row['username'];
                $_SESSION['username']       = $username;
                $email                      = $row['email'];
                $_SESSION['email']          = $email;
                $id                         = $row['id'];
                $_SESSION['id']             = $id;
                $profile_pic                = $row['profile_picture'];
                $_SESSION['profile_pic']    = $profile_pic;
                $phone                      = $row['phone_number'];
                $_SESSION['phone']          = $phone;
                $fName                      = $row['first_name'];
                $lName                      = $row['last_name'];
                $full_name                  = $fName . " " . $lName;
                $_SESSION['full_name']      = $full_name;
                echo "done";


                $update_status_query = "UPDATE `USER`  SET `online_status` = 'ONLINE' WHERE `id` = '{$id}'";
                $update_status_result = mysqli_query($mysqli,$update_status_query);

            }else{
                echo "error_password";
            }

        }
    } else {
        echo "error_username";
    }
}