<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 12-2-2018
 * Time: 19:34
 */
include '../../scripts/db_connection.php';
$user_id = $_GET['user_id'];
$edit_query  = "UPDATE `ADVERTISEMENT` SET `ad_type` = 'NORMAL' WHERE `USER_id` = '{$user_id}'";
$edit_result = mysqli_query($mysqli, $edit_query);

header('Location: ../index.php');
?>