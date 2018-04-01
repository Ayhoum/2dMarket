<?php
/**
 * Created by PhpStorm.
 * User: Alaa
 * Date: 25-3-2018
 * Time: 23:01
 */
include '../../scripts/db_connection.php';
//include 'sessions.php';
session_start();
ob_start();
?>
<?php

if (isset($_POST['submit'])){
    $message = $_POST['message'];
    $part_one = $_SESSION['id'];

    $part_two = $_GET['user_id'];
    $ad_id = $_GET['ad_id'];

    date_default_timezone_set('Europe/Amsterdam');
    $date = date('Y-m-d H:i:s');



    $select_query = "SELECT * FROM `CHAT` WHERE `part_one` = '{$part_one}' && `part_two` =  '{$part_two} ' && `ADVERTISEMENT_id` = '{$ad_id})' LIMIT 1 ";
    $select_result = mysqli_query($mysqli, $select_query);
    if (mysqli_num_rows($select_result) > 0) {
        while ($row= mysqli_fetch_assoc($select_result)){
            $chat_id = $row['id'];
        }


        $msg_query  = "INSERT INTO `MESSAGE` (`msg_text`, `sender`, `msg_time`, `CHAT_id`) VALUES ('{$message}', '{$part_one}', '{$date}','{$chat_id}')";
        $msg_result = mysqli_query($mysqli, $msg_query);
        header("Location: ../ad_page.php?ad_id=$ad_id");
    } else {

        $chat_query = "INSERT INTO `CHAT` (`part_one`,`part_two`,`ADVERTISEMENT_id`) VALUES ('{$part_one}','{$part_two}','{$ad_id}') ";
        $chat_result = mysqli_query($mysqli, $chat_query);

        $select_query = "SELECT * FROM `CHAT` WHERE `part_one` = '{$part_one}' && `part_two` =  '{$part_two} ' && `ADVERTISEMENT_id` = '{$ad_id})' LIMIT 1 ";
        $select_result = mysqli_query($mysqli, $select_query);
        if (mysqli_num_rows($select_result) > 0) {
            while ($row = mysqli_fetch_assoc($select_result)) {
                $chat_id = $row['id'];
            }

            $msg_query  = "INSERT INTO `MESSAGE` (`msg_text`, `sender`, `CHAT_id`) VALUES ('{$message}', '{$part_one}','{$chat_id}')";
            $msg_result = mysqli_query($mysqli, $msg_query);
        }

        header("Location: ../ad_page.php?ad_id=$ad_id");
    }
}


?>
