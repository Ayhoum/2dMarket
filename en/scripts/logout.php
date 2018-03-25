<?php
/**
 * Created by PhpStorm.
 * User: aylos
 * Date: 17/2/2018
 * Time: 12:28 ص
 */
session_start();

$id = $_SESSION['id'];
$update_status_query = "UPDATE `USER`  SET `online_status` = 'OFFLINE' WHERE `id` = '{$id}'";
$update_status_result = mysqli_query($mysqli,$update_status_query);
if ($update_status_query){

    session_destroy();

    header("Location: index.php");
} else{
    echo "ERROR";
}

