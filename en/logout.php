<?php
/**
 * Created by PhpStorm.
 * User: sulim
 * Date: 11-2-2018
 * Time: 14:00
 */

include '../scripts/db_connection.php';
ob_start();
session_start();

$id = $_SESSION['id'];
$update_status_query = "UPDATE `USER`  SET `online_status` = 'OFFLINE' WHERE `id` = '{$id}'";
$update_status_result = mysqli_query($mysqli,$update_status_query);
if ($update_status_query){

    session_unset();
    session_destroy();
    header("Location: index.php");
} else{
    echo "ERROR";
}

?>
