<?php
/**
 * Created by PhpStorm.
 * User: Ayhoum
 * Date: 4/2/2018
 * Time: 5:57 م
 */
include '../../scripts/db_connection.php';

if(isset($_GET['email'])){
    $email = $_GET['email'];
    $emailQuery = "SELECT * FROM USER WHERE email = '{$email}'";
    $email_num_rows = mysqli_query($mysqli, $emailQuery);
    $emailRows = mysqli_num_rows($email_num_rows);

    echo $emailRows;
}else{
    echo 0;

}

